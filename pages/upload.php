<h1>Upload page</h1>
<?php if(!isset($_POST['upp_btn'])):?>
<form action="index.php?page=2" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label for="file">File for loading:</label>
    <input type="file" name="file" class="form-control">

    </div>
    <button class="btn btn-ptimary" name="upp_btn" type="submit">Load pictures</button>
</form>
<?php else: ?>
<?php
    if($_FILES['file']['error'] != 0) {
        $error_code = $_FILES['file']['error'];
        echo "<h3><span style='color:red'>Upload Error Code: $error_code</span></h3>";
    }
    else {
         
        if(is_uploaded_file($_FILES['file']['tmp_name'])) {
            move_uploaded_file($_FILES['file']['tmp_name'], "images/".$_FILES['file']['name']);
            echo "<h3><span style='color:green'>Uploaded</span></h3>";
        }
    }
 ?>
<?php endif;?>