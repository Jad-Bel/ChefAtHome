<?php
    include ("/laragon/www/LA-MICHELINE/public/bin/connect.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE user_email = ?";
        $stmt = $connect->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result_user = $stmt->get_result();

        if ($result_user->num_rows > 0) {
            session_start();
            $user = $result_user->fetch_assoc();

            if (password_verify($password, $user['user_password'])) {
                $_SESSION['email'] = $user['user_email'];
                $_SESSION['role_id'] = $user['role_id'];

                $user_role_id = $user['role_id'];

                $sql_role = "SELECT * FROM role WHERE role_id = ?";
                $stmt_role = $connect->prepare($sql_role);
                $stmt_role->bind_param("i", $user_role_id);
                $stmt_role->execute();
                $result_role = $stmt_role->get_result();

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
            } else {
                header("location: ../authentification.php");
                exit;
            }
        } else {
            header("location: ../authentification.php");
            exit;
        }
    }
?>
