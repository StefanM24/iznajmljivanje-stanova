<?php

    $serverl="localhost";
    $userl="root";
    $passl="";
    $bazal='db1';



    $db = mysqli_connect($serverl, $userl, $passl, $bazal);
    if ($db->connect_error) {
      die("Connection failed: " . $db->connect_error);
    }


?>
