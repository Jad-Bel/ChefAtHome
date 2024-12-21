<?php 
    require "/laragon/www/LA-MICHELINE/public/bin/connect.php";

    if (isset($_GET['reserv_id'])) {
        $reservId = intval($_GET['reserv_id']);

        $decline_sql = "UPDATE reservation SET `status` = -1 WHERE reserv_id = $reservId";

        if ($connect->query($decline_sql)) {
            header("location: ../reservationAdmin.php");
            exit;
        } else {
            echo "Error declining reservation" . $connect->error;
        }
    }
?>