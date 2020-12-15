<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "choro_cookies";

    $conn = mysqli_connect($servername,$username,$password,$db);

    if(!$conn){
        die("error bang");
    }

?>