<div class="row mt-3">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo ROOT_PATH; ?>login">Login User</a></li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="container">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" name="password" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary float-right" name="submit" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>
