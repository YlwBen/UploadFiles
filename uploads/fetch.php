<?php
session_start();
include "config.php";
$connect=connectBDD();
function uploadBDD($connect){
    if(isset($_FILES) & !empty($_FILES)){
        $name = $_FILES['fileToUpload']['name'];
        $size = $_FILES['fileToUpload']['size'];
        $type = $_FILES['fileToUpload']['type'];
        $tmp_name = $_FILES['fileToUpload']['tmp_name'];
        $location = "../upload/img/".$name;
        $iduser = $_SESSION['id'];
    }
    try{
        $stmt = $connect->prepare("INSERT INTO `data` (name, size, type, location, iduser) VALUES ('$name', '$size', '$type', '$location', '$iduser')");

        $stmt->execute();
    }
    catch(PDOExeption $e){
        echo "Request failed : " . $e->getMessage();
    }
}
upload($connect);
uploadBDD($connect);
?>
