<!-- Ecran d'affichage -->
<div id="affichage" class="text-center">
<?php
if (isset($msg))
{
    echo "<font color ='red'>".$msg."</font>  <br />";
}
 ?>
 <?php
if(isset($_SESSION['id']) AND $_SESSION['id'] > 0)
{
    $sessionid = intval($_SESSION['id']);
    $requser = $connect->prepare('SELECT * FROM user WHERE id = ?');
    $requser->execute(array($sessionid));
    $userinfo = $requser->fetch();

    echo '<font color ="white">Pseudo : '.$userinfo['pseudo']."</font> <br />";
    echo '<font color ="white">Mail : '.$userinfo['email']."</font> <br />";

    if (isset($_SESSION['message'])){
        echo '<font color ="white">Mail : '.$_SESSION['message']."</font> <br />";
    }

}
  ?>

</div>
<!-- Fin d'ecran d'affichage -->
