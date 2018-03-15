<?php

include 'fetch.php';

$connect=connectBDD();

function upload($connect){
    //Gère la partie upload image

    $target_dir = "img";
    $target_file = $target_dir ."/".basename ($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    if(isset($_POST["envoiFile"])){

        if(isset($_GET['id']) AND $_GET['id'] > 0) {

            if (!file_exists($target_file)){

                if ($_FILES["fileToUpload"]["size"] < 70000){

                    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);



                }else{
                    $msg = "Ce fichier dépasse les 7Mo autorisés.";
                }

            }else{
                $msg = "Ce fichier existe déjà.";
            }header("Location: ../index.php?id=".$_SESSION['id']);

        }else if (!file_exists($target_file)){

                if ($_FILES["fileToUpload"]["size"] < 30000){

                    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);


                }else{
                    $msg ="Ce fichier dépasse les 3 Mo autorisés. Inscrivez-vous ou connectez-vous afin d'augmenter la limitation à 7Mo.";
                }

            }else{
                $msg = "Ce fichier existe déjà.";
            }header("Location: ../index.php");

        }

    }

//     try{
//
//         //check si le fichier existe
//         if (file_exists($target_file)) {
//             $msg= "Ce nom de fichier est déjà dans la base.";
//             return $msg;
//         }
//         // Check file size
//         if ($_FILES["fileToUpload"]["size"] < 70000) {
//             move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
//             $msg = "Le fichier pèse moins de 7Go donc a été upload.";
//             return $msg;
//         }else {
//             $msg = "Sorry, ton fichier est trop lourd.";
//         }
//
//
//     }
//     catch(Exception $e){
//             echo "Request failed : " . $e->getMessage();
//     }
//
//     header("Location: ../index.php");
//
//
// }
//     upload($connect);

?>
