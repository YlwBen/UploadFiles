<?php
    include 'ConnectBDD.php';

if(isset($_POST['formInscription']))
{
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['mdp']))
    {
        echo "ok";
    }
    else {
        {
            echo "non";
        }
    }
}

?>
