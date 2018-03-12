<?php
    include 'ConnectBDD.php';


    function log (){
        if(isset($_POST['forminscription']))
            if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['mdp']){
                echo 'Inscription validée!';
            }
        else {
            echo "Merci de remplir tous les champs!";
        }
        log();
    }

?>
