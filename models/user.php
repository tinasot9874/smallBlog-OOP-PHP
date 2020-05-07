<?php
class UserModel extends Model{
    public function register(){
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($post['submit'])){
            // encrypt password
            $password = md5($post['password']);
            // Insert into mysql
            $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
            $this->bind(':name', $post['name']);
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);
            $this->execute();

            // Verify
            if ($this->lastInsertId()){
                // Redirect
                header('Location: '.ROOT_URL.'users/login');
            }
        }
        return;

    }
    public function login(){
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($post['submit'])){
            // encrypt password
            $password = md5($post['password']);
            // Check login
            $this->query('SELECT * FROM users WHERE email = :email AND password = :password');
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);

            $row = $this->single();
            if ($row){
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "name" => $row['name'],
                    "email" => $row['email']
                );
                header('Location: '.ROOT_URL.'shares');
            } else{
                Messages::setMsg('Incorrect Login', 'error');
            }
        }
        return;

    }
}