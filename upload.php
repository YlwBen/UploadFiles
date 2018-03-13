<?php
require_once('bdd/ConnectBDD.php');
if(isset($_FILES) & !empty($_FILES)){
    $name = $_FILES['profile']['name'];
    $size = $_FILES['profile']['size'];
    $type = $_FILES['profile']['type'];
    $tmp_name = $_FILES['profile']['tmp_name'];
}
$location ="uploads/";
$maxsize = 7000000;
if(isset($name) &!empty($name)){
    if($size <= $maxsize){
        if(move_uploaded_file($tmp_name, $location.$name)){
            $sql = "INSERT INTO `data` (name, size, type, location) VALUES ('$name', '$size', '$type', '$location$name')";
            $res = mysqli_query($connection, $sql);
            if($res){
                echo "Uploaded successfully";
            }
        }else{
            echo "Failed to Upload";
        }
    }else{
        echo "File should be only 7Mo in size";
    }
}
?>
