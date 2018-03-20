<?php

include '../bdd/ConnectBDD.php';


$_SESSION["id"] = NULL;
unset($_SESSION['id']);
unset($_SESSION['mail']);

// On détruit les variables de notre session
$_SESSION = array();
session_unset ();

// On détruit notre session
session_destroy ();

// On redirige le visiteur vers la page d'accueil
header('location: ../index.php');

echo "deco";
 ?>
