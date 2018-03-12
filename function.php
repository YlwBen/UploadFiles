<?php
    function
        include "ConnectBDD.php";

        //This is the directory where images will be saved
        $target = "pics";
        $target = $target . basename( $_FILES['Filename']['name']);

        //This gets all the other information from the form
        $Filename=$_POST['Filename'];
        $Description=$_POST['Description'];
        $pic=($_FILES['Filename']['name']);


        // Connects to your Database
        mysql_connect("localhost", "root", "") or die(mysql_error()) ;
        mysql_select_db("altabotanikk") or die(mysql_error()) ;

        //Writes the information to the database
        mysql_query("INSERT INTO picture (Filename,Description)
        VALUES ('$Filename', '$Description')") ;

        //Writes the Filename to the server
        if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
            //Tells you if its all ok
            echo "The file ". basename( $_FILES['uploadedfile']['Filename']). " has been uploaded, and your information has been added to the directory";
        } else {
            //Gives and error if its not
            echo "Sorry, there was a problem uploading your file.";
        }
    }
?>
