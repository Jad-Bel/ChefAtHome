<?php 
    require "/laragon/www/LA-MICHELINE/public/bin/connect.php";

    if (isset($_GET['user_id'])) {
        $user_id = intval($_GET['user_id']);

        $delete_sql = "DELETE FROM `users` WHERE `user_id` = $user_id";

        if ($connect->query($delete_sql)) {
            header ("location: ../reservationAdmin.php");
            exit;
        } else {
            echo "Error deleting the use: " . $connect->error;
        }
    } else {
        echo "No user provided";
    }
?>