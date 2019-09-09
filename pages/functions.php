<?php
    $users = 'pages/users.txt';
    function register($login, $password, $email) {
        $login = trim(htmlspecialchars($login));
        $password = trim(htmlspecialchars($password));
        $email = trim(htmlspecialchars($email));
        if($login == '' || $password == '' || $email == '') {
            echo "<h3><span style='color:red'>Fills All Requared Fields</span></h3>";
            return false;
        }
        global $users;
        $file = fopen($users,"a+");
        while ($line=fgets($file)) {
            $read_name = substr($line, 0,strpos($line, ':'));
            if($read_name == $login) {
                echo "<h3><span style='color:red'>Such Login Is already used!</span></h3>";
                return false;
            }
        }
        $password = md5($password);
        $line = "$login:$password:$email\r\n";
        fputs($file, $line.PHP_EOL);
        fclose($file);
        return true;
    }
?>