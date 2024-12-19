<?php 
    require "/xampp/htdocs/LA-MICHELINE/public/bin/connect.php";

    if (isset($_GET['menu_id'])) {
        $menu_id = intval($_GET['menu_id']);

        $sql = "DELETE FROM `menu` WHERE `menu_id` = $menu_id";

        if ($connect->query($sql)) {
            header("location: ../menusAdmin.php");
            exit;
        } else {
            echo "Error deleting the menu: " > $connect->error;
        }
    } else {
        echo "No menu provided.";
    }
?>