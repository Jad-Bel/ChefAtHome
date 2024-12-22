<?php 
    include "/laragon/www/LA-MICHELINE/public/bin/connect.php";
    // $sql = "SELECT * FROM reservation";
    // $result = $connect->query($sql);
    
// die;

    if (isset($_GET['reserv_id'])) {
        $reservId = intval($_GET['reserv_id']);

        $decline_sql = "UPDATE reservation SET `status` = -1 WHERE `reserv_id` = 5";
        $result = $connect->query($decline_sql);
        if ($result) {
            header("location: ../reservationAdmin.php");
            exit;
        } else {
            die("Error declining reservation: " . $connect->error);
        }
        $decline_sql = "UPDATE reservation SET `status` = -1 WHERE `reserv_id` = 5";
        $result = $connect->query($decline_sql);
    } 
    // die("reserv_id parameter is missing or invalid.");

?>