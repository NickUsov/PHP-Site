<h1>Registration page</h1>
<?php if(!isset($_POST['reg_btn'])):?>
    <form action="index.php?page=4" method="post">
        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" name="login" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary" name="reg_btn">Register</button>
    </form>
<?php else:?>
<?php 
if(register($_POST['login'], $_POST['password'], $_POST['email'])){
    echo "<h3><span style='color:green'>New User Added!</span></h3>";
}
 ?>
<?php endif;?>