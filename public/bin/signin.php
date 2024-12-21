<?php
    include ("/laragon/www/LA-MICHELINE/public/bin/connect.php");

    // $servername = "localhost";
    // $username = "root";
    // $passwrd = "Hitler";
    // $database = "lamicheline_db";

    // $connect = mysqli_connect($servername, $username, $passwrd, $database);

    // if (!$connect) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $first_Name = $_POST["firstName"];
        $last_Name = $_POST["lastName"];
        $adresse = $_POST["adresse"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "INSERT INTO users (`user_name`, `user_last_name`, `user_email`, `user_password`, `user_address`, `role_id`) 
        VALUES ('$first_Name', '$last_Name','$email', '$password', '$adresse', '1')";
        
        $result = $connect->query($sql);
        
        if (!$result) {
            echo "Invalid query: " . $connect->error;
        } else {
            header("location: ../authentification.php");
            exit;        
        }
    }
?>