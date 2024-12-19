<?php
    // include ("../public/bin/connect.php");

    $servername = "localhost";
    $username = "root";
    $passwrd = "";
    $database = "lamicheline_db";

    $connect = mysqli_connect($servername, $username, $passwrd, $database);

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE user_email = '$email' AND user_password = '$password'";
        
        $result_user = $connect->query($sql);

        if ($result_user->num_rows > 0) {
            $user = $result_user->fetch_assoc();
            $user_role_id = $user['role_id'];

            $sql_role = "SELECT * FROM role WHERE role_id = '$user_role_id'";
            $result_role = $connect->query($sql_role);

            if ($result_role->num_rows > 0) {
                $role = $result_role->fetch_assoc();

                if ($role['role_id'] == 2) {
                    header("location: ../reservationAdmin.php");
                    exit;
                } elseif ($role['role_id'] == 1) {
                    header("location: ../index.php");
                    exit;
                }
            }
        }
    }
?>