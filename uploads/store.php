<?php

include 'fetch.php';
$connect=connectBDD();
function upload($connect){
    //Gère la partie upload image
    $target_dir = "img/";
    $target_file = $target_dir.basename ($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $lastpage = $_SERVER['HTTP_REFERER'];
    $name = $_FILES['fileToUpload']['name'];
    $size = $_FILES['fileToUpload']['size'];
    $tmp_name = $_FILES['fileToUpload']['tmp_name']; // Lien de DL ?
    $location = "../upload/img/".$name;

    if(isset($_SESSION['id']) AND ($_SESSION['id'] > 0)) {
        echo "C'est un membre du site.";
        if (($size <= 7340032) AND ($size > 0)) {
            echo "Un fichier a été trouvé, on continue. ";
            if (file_exists($target_file))
            {
                $msg = "Ce nom de fichier est déjà dans '/img', on s'arrête. ";

            }else
            {
                $msg = "Enregistré sous ".$_FILES['fileToUpload']['name'];
                echo '<br />';
                echo "Dernière page visité : ".$lastpage;
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
            }

        }
        else
        {
            $msg = "STOP ! Soit votre fichier dépasse 7Mo soit il n'y a pas de fichier. ";
        }
    }else{
        echo "C'est un inconnu. ";
        if (($size <= 3145728) AND ($size > 0)){
            echo "Un fichier a été trouvé, on continue. ";
            if (file_exists($target_file))
            {
                $msg = "Ce nom de fichier est déjà dans '/img', on s'arrête. ";

            }else
            {
                $msg = "Enregistré sous ".$_FILES['fileToUpload']['name'];
                echo '<br />';
                echo "Dernière page visité : ".$lastpage;
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
            }
        }
        else
        {
            $msg = "STOP ! Soit votre fichier dépasse 3Mo soit il n'y a pas de fichier. ";
        }

<<<<<<< HEAD
    }
    $_SESSION['message'] = $msg;
    header('location:'.$lastpage);
=======
    }header('location: ../index.php');
>>>>>>> 69472f18581e7306f18ed767023de95db32adde5

}
?>
