<?php
// include_once("../bdd/ConnectBDD.php");
include "config.php";
// include 'store.php';
$connect=connectBDD();


function uploadBDD($connect){

    if(isset($_FILES) & !empty($_FILES)){
        $name = $_FILES['fileToUpload']['name'];
        $size = $_FILES['fileToUpload']['size'];
        $type = $_FILES['fileToUpload']['type'];
        $tmp_name = $_FILES['fileToUpload']['tmp_name'];
        $location = "../upload/img".$name;
    }

    try{
        $stmt = $connect->prepare("INSERT INTO `data` (name, size, type, location) VALUES ('$name', '$size', '$type', '$location')");
        //$stmt->bindParam(':name', $name, PDO::PARAM_INT);
        //$stmt->bindParam(':size', $size, PDO::PARAM_INT);
        //$stmt->bindParam(':type', $type, PDO::PARAM_INT);
        //$stmt->bindParam(':location', $location, PDO::PARAM_INT);
        $stmt->execute();

        // return $stmt;
    }
    catch(PDOExeption $e){
        echo "Request failed : " . $e->getMessage();
    }

}
upload($connect);
uploadBDD($connect);

?>
