<?php
    include("/laragon/www/LA-MICHELINE/public/bin/connect.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $first_Name = $_POST["firstName"];
        $last_Name = $_POST["lastName"];
        $adresse =$_POST["adresse"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            exit;
        }

        $check_email = "SELECT * FROM users WHERE user_email = ?";
        $stmt = $connect->prepare($check_email);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "Email Address already exists";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $insert_user = "INSERT INTO users (`user_name`, `user_last_name`, `user_email`, `user_password`, `user_address`, `role_id`) 
            VALUES (?, ?, ?, ?, ?, '1')";
            
            $stmt = $connect->prepare($insert_user);
            $stmt->bind_param("sssss", $first_Name, $last_Name, $email, $hashed_password, $adresse);

            $result = $stmt->execute();

            if (!$result) {
                echo "Error inserting user: " . $stmt->error;
            } else {
                header("location: ../authentification.php");
                exit;        
            }
        }
    }
?>
