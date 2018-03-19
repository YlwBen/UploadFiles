<!-- Ecran d'affichage -->
<div id="affichage" class="text-center">
<?php
if (isset($msg))
{
    echo "<font color ='red'>".$msg."</font>  <br />";
}
 ?>
 <?php
if(isset($_GET['id']) AND $_GET['id'] > 0)
{
    $getid = intval($_GET['id']);
    $requser = $connect->prepare('SELECT * FROM user WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();

    echo '<font color ="blue">Pseudo : '.$userinfo['pseudo']."</font> <br />";
    echo '<font color ="blue">Mail : '.$userinfo['email']."</font> <br />";
}
  ?>
</div>
<!-- Fin d'ecran d'affichage -->
