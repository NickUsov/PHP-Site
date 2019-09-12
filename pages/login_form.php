<?php
    if(isset($_POST['log_in'])) {
        login($_POST['log_check'], $_POST['pas_check']);
        echo 'log in!'.$_SESSION['user'];
    }
    if(isset($_POST['log_out'])) {
        unset($_SESSION['user']);
    }
?>
<?php if(!isset($_SESSION['user'])){?>
    <form action="index.php" class="form-inline pull-right" method="post">
        <div class="form-group">
            <label for="log_check">Login: </label>
            <input type="text" name="log_check" class="form-control">
        </div>
        <div class="form-group">
            <label for="pas_check">Password: </label>
            <input type="password" name="pas_check" class="form-control">
        </div>
        <button type="submit" name="log_in" class="btn-primary btn">Done</button>
    </form>
<?php } else {?>
    <form action="index.php" method="post" class="pull-right">
        <input type="submit" class="btn btn-warning" value="Выход" name="log_out">
    </form>
<?php }?>

