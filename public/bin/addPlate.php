<?php 
require "/laragon/www/LA-MICHELINE/public/bin/connect.php";

$plate_name = "";
$plate_description = "";
$plate_categorie = "";
$plate_menu = "";

$errorMessage = "";
$succesMessage = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $plate_name = $_POST['plateName'];
    $plate_description = $_POST['plateDescription'];
    $plate_categorie = $_POST['plateCategory'];
    $plate_menu = $_POST['plateMenu'] ?? "";

        if (empty($plate_name) || empty($plate_description) || empty($plate_categorie)) {
            $errorMessage = "Plate name, description, categorie are required";
        }

        $sql = "INSERT INTO `plats`(`nom_plat`, `description`, `type`, `menu_id`) VALUES ('$plate_name','$plate_description','$plate_categorie','$plate_menu')";
        $result = $connect->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connect->error;
        }

        $succesMessage = "Plate added successfully";
        $plate_name = "";
        $plate_description = "";
        $plate_categorie = "";
        $plate_menu = "";
}
?>