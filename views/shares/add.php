
<div class="row mt-3">
    <div class="col-md-12">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo ROOT_PATH; ?>shares">Shares</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
    </nav>
    </div>
</div>
<div class="row">

    <div class="col-md-12">
        <div class="container">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Share title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="title" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" required rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Link Website</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="link" required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary float-right" name="submit" type="submit">Submit</button>
        </div>
    </form>
        </div>
    </div>

</div>
