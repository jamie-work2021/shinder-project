<?php include __DIR__ . '/parts/config.php'; ?>
<?php include __DIR__ . '/parts/html-head.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>
<div class="container">
    <div class="row">
        <pre>
            <?php print_r($_POST) ?>
        </pre>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form method="post">

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" value="<?= empty($_POST['email']) ? '' : htmlentities($_POST['email']) ?>" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" value="<?= empty($_POST['password']) ? '' : htmlentities($_POST['password']) ?>" name="password">
                </div>
                <div class="form-group">
                    <label for="mydate">Date</label>
                    <input type="datetime-local" class="form-control" id="mydate" name="mydate">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include __DIR__ . '/parts/scripts.php' ?>
<?php include __DIR__ . '/parts/html-foot.php' ?>