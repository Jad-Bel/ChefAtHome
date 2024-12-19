<?php
    include ("../LA-MICHELINE/public/bin/connect.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = "email";
        $password = "password";

        $sql = "SELECT * FROM users WHERE user_email = '$email' AND user_password = '$password'";
        
        $result = $connect->query($sql);
    }
?>