<?php
    include 'ConnectBDD.php';
    $connect = ConnectBDD();


if(isset($_POST['formInscription']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $pwd = sha1($_POST['pwd']);
    $pwd2 = sha1($_POST['pwd2']);

    if(!empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['mail2']) && !empty($_POST['pwd']) && !empty($_POST['pwd2']))
    {

        $pseudolength = strlen($pseudo);
        if($pseudolength <= 255)
        {
            if($mail == $mail2)
            {
                if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                {

                    if($pwd == $pwd2)
                    {
                        $insertmbr = $connect->prepare("INSERT INTO user(pseudo, email, pwd) VALUES (?, ?, ?)");
                        $insertmbr->execute(array($pseudo, $mail, $pwd));
                        $erreur = "Votre compte a bien été crée";
                    }
                    else
                    {
                        $erreur = "Vos mots de passe ne correspondent pas.";
                    }
                }
                else
                {
                    $erreur = "Votre adresse mail n'est pas valide.";
                }
            }
            else
            {
                $erreur = "Vos adresses mail ne correspondent pas.";
            }
        }
        else
        {
            $erreur = "Votre pseudo ne doit pas éxéder 255 caractères.";
        }
    }
    else
    {
        $erreur = "Tous les champs doivent être complétés.";
    }
}

?>
