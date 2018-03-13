<?php
    include 'header.php';
    include 'bdd/login.php';
?>

<div class="container-fluid">
    <h1 class="col-12 text-center">Upload Files !</h1>
</div>

  <!-- Navigation haut de page // A finir, faire entièrement en js ?-->
<nav id="navigation" class="navbar navbar-expand-lg navbar-light">
    <button class="col-12 text-center navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <button id="btnInscription" type="button" class="btn" data-toggle="modal" data-target="#inscriptionModal">
                    Inscription
                </button>
            </li>
            <li class="nav-item">
                <button id="btnConnexion" type="button" class="btn" data-toggle="modal" data-target="#connexionModal">
                    Connexion
                </button>
            </li>
        </ul>
    </div>
</nav>
 <!-- Fin de navigation haut de page -->

 <!-- Modal inscription -->
<div class="modal fade" id="inscriptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inscription à Upload Files.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="text-center" id="formInscription" action="" method="POST">
            <ul>
                <li><input type="text" name="pseudo" placeholder="Pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>"></li>
                <li><input type="email" name="mail" placeholder="Adresse mail" value="<?php if(isset($mail)) { echo $mail; } ?>"></li>
                <li><input type="email" name="mail2" placeholder="Confirmation adresse mail" value="<?php if(isset($mail2)) { echo $mail2; } ?>"></li>
                <li><input type="text" name="pwd" placeholder="Mot de passe"></li>
                <li><input type="text" name="pwd2" placeholder="Confirmation mot de passe"></li>
            </ul>
            <br />
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="formInscription" class="btn btn-primary">Validation</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

    <!-- Fin du modal inscription -->

<!-- Modal connexion -->
<div class="modal fade" id="connexionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Connexion à Upload Files.</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
       <form id="formConnexion" class="text-center" action="index.php" method="post">
           <ul>
               <li><input type="text" name="pseudoConnect" placeholder="Pseudo"></li>
               <li><input type="text" name="pwdConnect" placeholder="Mot de passe"></li>
           </ul>
           <br />
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Validation</button>
           </div>
       </form>
     </div>
   </div>
 </div>
</div>
<!-- Fin du modal connexion -->

<!-- Ecran d'affichage -->
<div id="affichage" class="text-center">
<?php
    if (isset($erreur))
    {
        echo '<font color ="red">'.$erreur."</font>";
    }else {
        echo $ok;
    }
 ?>
</div>
<!-- Fin d'ecran d'affichage -->

<!-- Actions possibles de l'upload files -->
<form class="text-center" action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="profile" id="exampleInputFile">
    <button type="button" class="btn" name="listfiles">Afficher mon activité</button>
    <button type="submit" class="btn btn-default">Envoyer</button>
</form>
<!-- Fin actions possibles de l'upload files -->


<?php include 'footer.php'; ?>
