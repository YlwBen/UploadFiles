<?php

echo "deconnecter";

$_SESSION["user"] = NULL;

// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();

// On redirige le visiteur vers la page d'accueil
header('location: ../index.php');


 ?>
