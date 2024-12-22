<?php
    include ("/laragon/www/LA-MICHELINE/public/bin/connect.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE user_email = '$email' AND user_password = '$password'";
        $result_user = $connect->query($sql);
        // var_dump($result_user);  

        if ($result_user->num_rows > 0) {
            session_start();
            $user = $result_user->fetch_assoc();

            $_SESSION['email'] = $user['user_email'];
            $_SESSION['role_id'] = $user['role_id'];

            $user_role_id = $user['role_id'];

            $sql_role = "SELECT * FROM role WHERE role_id = '$user_role_id'";
            $result_role = $connect->query($sql_role);

            if ($result_role->num_rows > 0) {
                $role = $result_role->fetch_assoc();

                if ($role['role_id'] == 2) {
                    // echo 1;
                    // die;
                    header("location: ../reservationAdmin.php");
                    exit;
                } elseif ($role['role_id'] == 1) {
                    // echo 2;
                    // die;
                    header("location: ../index.php");
                    exit;
                }
            }
        } else {
            echo 3;
            die;
            header("location: ../authentification.php");
            exit;
        }
    }
?>