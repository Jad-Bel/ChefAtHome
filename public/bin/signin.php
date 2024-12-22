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
        $check_email = "SELECT * FROM users where user_email = $email";
        $email_result = $connect->query($check_email);

        if ($email_result->num_rows > 0) {
            echo "Email Address already exists";
        } else {
            $insert_user = "INSERT INTO users (`user_name`, `user_last_name`, `user_email`, `user_password`, `user_address`, `role_id`) 
            VALUES ('$first_Name', '$last_Name','$email', '$password', '$adresse', '1')";
            
            $result = $connect->query($insert_user);
            
            if (!$result) {
                echo "Invalid query: " . $connect->error;
            } else {
                header("location: ../authentification.php");
                exit;        
            }
        }
    }
?>