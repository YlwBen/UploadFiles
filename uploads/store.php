<?php
// Start the session
session_start();

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
        if ($_FILES["fileToUpload"]["size"] > 30) {
            echo "Sorry, ton fichier est trop lourd.";
        }
        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){
            echo "L'image ".  basename( $_FILES['fileToUpload']['name']).
                "a bien été chargé!";
        }
        header("Location: ../index.php?id=".$_SESSION['id']);
    }
    catch(Exception $e){
            echo "Request failed : " . $e->getMessage();
    }
}
    upload($connect);
?>
