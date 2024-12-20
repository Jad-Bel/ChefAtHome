<?php 
    require "/laragon/www/LA-MICHELINE/public/bin/connect.php";

    $menu_name = "";
    $price = "";
    $description = "";

    $errorMessage = "";
    $succesMessage = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $menu_name = $_POST['menuName'];
        $price = $_POST['menuPrice'];
        $description = $_POST['menuDescription'];

        do {
            if (empty($menu_name) || empty($price) || empty($description)) {
                $errorMessage = "All fields are required";
                break;
            }

            $sql = "INSERT INTO menu (`menu_nom`, `description`, `price`) VALUES ('$menu_name', '$description', '$price')";
            $result = $connect->query($sql);

            if (!$result) {
                $errorMessage = "Invalid query " . $connect->error;
            }

            $succesMessage = "Menu added successfully";
            $menu_name = $price = $description = "";
        } while (false);
    }

    
?>