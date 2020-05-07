<?php if (isset($_SESSION['is_logged_in'])): ?>
    <div class="row mt-2 mb-2">
        <div class="col-md-12 ">
            <a href="<?php echo ROOT_PATH; ?>shares/add" class="btn btn-primary btn-sm float-right">Share Something</a>
        </div>
    </div>
<?php else: ?>
    <div class="row mt-2 mb-2">
        <div class="col-md-12 ">
        <h4 class="float-right">Please <a href="<?php echo ROOT_URL;?>users/login">login</a> to share!</h4>
        </div>
    </div>
<?php endif; ?>
<div class="row">
    <table class="table table-hover">
        <tbody>
            <?php foreach ($viewmodel as $item) : ?>
            <tr>
                <td>
                    <h5><?php echo $item['title']; ?></h5>
                    <small><?php echo $item['create_date'] ?></small>
                    <hr/>
                    <p><?php echo $item['body'] ?></p>
                    <br/>
                    <a class="btn btn-outline-primary float-right btn-sm" href="<?php echo $item['link']; ?>" target="_blank">Go to Website</a>

                </td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

