<?php 
    require "/laragon/www/LA-MICHELINE/public/bin/connect.php";

    if (isset($_GET['plat_id'])) {
        $plat_id = intval($_GET['plat_id']);

        $sql = "DELETE FROM `plats` WHERE `plat_id` = $plat_id";

        if ($connect->query($sql)) {
            header("location: ../platesAdmin.php");
            exit;
        } else {
            echo "Error deleting the dish: " . $connect->error;
        }
    } else {
        echo "No dish provided.";
    }
?>