<?php
// include_once("../bdd/ConnectBDD.php");
include "config.php";
// include 'store_image.php';
$connect=connectBDD();

if(isset($_FILES) & !empty($_FILES)){
    $name = $_FILES['fileToUpload']['name'];
    $size = $_FILES['fileToUpload']['size'];
    $type = $_FILES['fileToUpload']['type'];
    $tmp_name = $_FILES['fileToUpload']['tmp_name'];
}

function uploadBDD ($connect){
        try{
            $stmt = $connect->prepare("INSERT INTO `data` (name, size, type, location) VALUES ('', '$name', '$size', '$type', '$location$name')";
            $stmt->bindParam(':name', $name, PDO::PARAM_INT);
            $stmt->bindParam(':size', $size, PDO::PARAM_INT);
            $stmt->bindParam(':type', $type, PDO::PARAM_INT);
            $stmt->bindParam(':location', $location$name, PDO::PARAM_INT);
            $stmt->execute($connect);

            // return $stmt;
        }
        catch(PDOExeption $e){
            echo "Request failed : " . $e->getMessage();
        }

    }
    upload($connect);
    uploadBDD($connect);

?>
