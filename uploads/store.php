<?php

include 'fetch.php';
$connect=connectBDD();
function upload($connect){
    //Gère la partie upload image
    $target_dir = "img/";
    $target_file = $target_dir . basename ($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $lastpage = $_SERVER['HTTP_REFERER'];
    $name = $_FILES['fileToUpload']['name'];
    $size = $_FILES['fileToUpload']['size'];
    $tmp_name = $_FILES['fileToUpload']['tmp_name']; // Lien de DL ?
    $location = "../upload/img/".$name;

    if($lastpage === "http://localhost/UploadFiles/index.php?id=".$_SESSION['id']){
        echo "C'est un membre du site.";
        if (($size <= 700000) AND ($size > 300000)) {
            echo "Un fichier a été trouvé, on continue. ";
            if (file_exists($target_file))
            {
                echo "Ce nom de fichier est déjà dans '/img', on s'arrête. ";

            }else
            {
                echo "Enregistré sous ".$_FILES['fileToUpload']['name'];
                echo '<br />';
                echo "Dernière page visité : ".$lastpage;
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
            }
        }
        else
        {
            echo "STOP ! Soit votre fichier dépasse 7Mo soit il n'y a pas de fichier. ";
        }
    }else{
        echo "C'est un inconnu. ";
        if (($size <= 300000) AND ($size > 0)) {
            echo "Un fichier a été trouvé, on continue. ";
            if (file_exists($target_file))
            {
                echo "Ce nom de fichier est déjà dans '/img', on s'arrête. ";

            }else
            {
                echo "Enregistré sous ".$_FILES['fileToUpload']['name'];
                echo '<br />';
                echo "Dernière page visité : ".$lastpage;
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
            }
        }
        else
        {
            echo "STOP ! Soit votre fichier dépasse 3Mo soit il n'y a pas de fichier. ";
        }

    }


    // try{
    //     //check si le fichier existe
        // if (file_exists($target_file)) {
        //     $msg= "Ce nom de fichier est déjà dans la base.";
        //     return $msg;
        // }
    //     // Check file size
    //     if ($_FILES["fileToUpload"]["size"] > 500000) {
    //         echo "Sorry, ton fichier est trop lourd.";
    //     }
    //     if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){
    //         echo "L'image ".  basename( $_FILES['fileToUpload']['name']).
    //             "a bien été chargé!";
    //     }
    //     header("Location: ../index.php?id=".$_SESSION['id']);
    // }
    // catch(Exception $e){
    //         echo "Request failed : " . $e->getMessage();
    // }
}
    // upload($connect);
?>
