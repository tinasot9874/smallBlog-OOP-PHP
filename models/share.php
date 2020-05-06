<?php
class ShareModel extends Model {
    public function Index(){
        $this->query('SELECT * FROM shares');
        $row = $this->resultSet();
        print_r($row);
    }
}
