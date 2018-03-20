<!-- Ecran d'affichage -->
<div id="affichage" class="text-center">
<?php
if (isset($msg))
{
    echo '<h5 class="loginError">'.$msg.'</h5>  <br />';
}
 ?>
 <?php
if(isset($_SESSION['id']) AND $_SESSION['id'] > 0)
{
    $sessionid = intval($_SESSION['id']);
    $requser = $connect->prepare('SELECT * FROM user WHERE id = ?');
    $requser->execute(array($sessionid));
    $userinfo = $requser->fetch();

    echo '<h5 class="loginLog">Pseudo : '.$userinfo['pseudo']."</h5> <br />";
    echo '<h5 class="loginLog">Mail : '.$userinfo['email']."</h5> <br />";
}
  ?>

</div>
<!-- Fin d'ecran d'affichage -->
