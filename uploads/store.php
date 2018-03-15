<?php
// include 'config.php';
// include_once("config.php");
include 'fetch.php';

$connect=connectBDD();

function upload($connect){
    //Gère la partie upload image

    $target_dir = "img";
    $target_file = $target_dir ."/".basename ($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    try{

        //check si le fichier existe
        if (file_exists($target_file)) {
            $msg= "Ce nom de fichier est déjà dans la base.";
            return $msg;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, ton fichier est trop lourd.";
        }


        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);



        header("Location: ../index.php");
    }
    catch(Exception $e){
            echo "Request failed : " . $e->getMessage();
    }

}
    upload($connect);
    uploadBDD($connect);
?>
