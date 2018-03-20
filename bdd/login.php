<?php

    include 'ConnectBDD.php';
    $connect = ConnectBDD();


// Inscription d'un membre dans la BDD via les réponses au formulaire d'inscription.
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
                        $msg = "Votre compte a bien été crée";
                    }
                    else
                    {
                        $msg = "Vos mots de passe ne correspondent pas.";
                    }
                }
                else
                {
                    $msg = "Votre adresse mail n'est pas valide.";
                }
            }
            else
            {
                $msg = "Vos adresses mail ne correspondent pas.";
            }
        }
        else
        {
            $msg = "Votre pseudo ne doit pas éxéder 255 caractères.";
        }
    }
    else
    {
        $msg = "Tous les champs doivent être complétés. ('Inscription')";
    }
}
// Fin d'inscription de membre à la BDD.

// Connexion d'un membre.
if (isset($_POST['formConnexion']))
{
    $pseudoConnect = htmlspecialchars($_POST['pseudoConnect']);
    $pwdConnect = sha1($_POST['pwdConnect']);
    if (!empty($pseudoConnect) && !empty($pwdConnect))
    {
        $requser = $connect->prepare("SELECT * FROM user WHERE pseudo = ? AND pwd = ?");
        $requser->execute(array($pseudoConnect, $pwdConnect));
        $userexist = $requser->rowCount();
        if($userexist == 1)
        {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location: index.php?id=".$_SESSION['id']);
        }
        else
        {
            $msg = "Mauvais mail ou mot de passe.";
        }
    }
    else
    {
        $msg = "Tous les champs doivent être complétés. ('Connexion')";
    }
}
// Fin de connexion d'un membre.

?>
