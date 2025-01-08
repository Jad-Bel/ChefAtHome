<?php 
    require "/laragon/www/LA-MICHELINE/public/bin/connect.php";
    
    $succesMessage = "";
    $errorMessage = "";

    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        
        $user_sql = "SELECT * FROM users";
        $menu_sql = "SELECT * FROM menu";

        if (isset($_GET['user_id'])) {
            $user_id = intval($_GET['user_id']);
        } else {
            $user_id = null;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $menu = intval($_POST['reservMenu']);
        $date = $_POST['reservDate'];

        $user_id = intval($_POST['user_id']);
        $user_name = $_POST['user_name'];
        $user_lastName = $_POST['user_last_name'];
        $user_address = $_POST['user_address'];

        if (empty($menu) || empty($date)|| empty($user_id) || empty($user_name) || empty($user_lastName) || empty($user_address)) {
            $errorMessage = "All fields are required";
        }
        $bookRes_sql = "INSERT INTO reservation (menu_id, reservation_date, user_name, user_last_name, `address`, `status`, user_id)
        VALUES ('$menu', '$date', '$user_name', '$user_lastName', '$user_address', '0', '$user_id')";

        $book_result = $connect->query($bookRes_sql);
        
        if (!$book_result) {
            echo "Invalid query: " . $connect->error;
        } else {
            $succesMessage = "Reservation affected";
            header ("location: ../reservation.php");
            exit;
        }

    }
?>