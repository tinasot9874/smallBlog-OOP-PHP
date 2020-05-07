<div class="row mt-2 mb-2">
<a href="<?php echo ROOT_PATH; ?>shares/add" class="btn btn-primary btn-sm">Share Something</a>
</div>
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
                    <a class="btn btn-outline-primary float-right" href="<?php echo $item['link']; ?>" target="_blank">Go to Website</a>

                </td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

