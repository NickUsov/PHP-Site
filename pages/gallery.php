<h1>Gallery page</h1>
<div class="row">
    <?php
        $path = 'images/';
        $dir = opendir($path);
        $arr = [];
        //echo $dir;
        while (($file = readdir($dir))!= null) {
            $full_name = $path.$file;
            echo $full_name;
            if($file != '.' && $file != '..') {
                echo "<div class='col-md-4'><img class='img-responsive thumbnail img-rounded' src='images/$file' alt='pictures></div>";
            }
            
        }
    ?>
</div>