<?php
    if(isset($_POST['log_in'])) {
        login($_POST['login'], $_POST['password']);
        echo 'log in!'.$_SESSION['user'];
    }
    if(isset($_POST['log_out'])) {
        unset($_SESSION['user']);
    }
?>
<?php if(!isset($_SESSION['user'])){?>
    <form action="index.php" class="form-inline pull-right" method="post">
        <div class="form-group">
            <label for="login">Login: </label>
            <input type="text" name="login" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" name="log_in" class="btn-primary btn">Done</button>
    </form>
<?php } else {?>
    <form action="" class="pull-right">
        <input type="submit" class="btn btn-warning" value="Выход" name="log_out">
    </form>
<?php }?>

