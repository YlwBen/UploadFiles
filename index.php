<?php
    include 'header.php';
    include 'bdd/login.php';
    include 'listfile.php';
    //include 'uploads/store.php';
?>

 <!-- Navigation haut de page -->
<?php include 'navigation.php' ?>
 <!-- Fin de navigation haut de page -->

<!-- Modal inscription -->
<div class="modal fade" id="inscriptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content myModal">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inscription à File Uploader</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="text-center" id="formInscription" action="" method="POST">
            <ul class="list-unstyled">
                <li><input type="text" class="my-2 col-9" name="pseudo" placeholder="Pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>"></li>
                <li><input type="email" class="my-2 col-9" name="mail" placeholder="Adresse mail" value="<?php if(isset($mail)) { echo $mail; } ?>"></li>
                <li><input type="email" class="my-2 col-9" name="mail2" placeholder="Confirmation adresse mail" value="<?php if(isset($mail2)) { echo $mail2; } ?>"></li>
                <li><input type="password" class="my-2 col-9" name="pwd" placeholder="Mot de passe"></li>
                <li><input type="password" class="my-2 col-9" name="pwd2" placeholder="Confirmation mot de passe"></li>
            </ul>
            <br />
            <div class="modal-footer">
              <button type="button" class="btn modal-btn" data-dismiss="modal">Annuler</button>
              <button type="submit" name="formInscription" class="btn modal-btn">Valider</button>
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
       <h5 class="modal-title" id="exampleModalLabel">Connexion à File Uploader</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
       <form id="formConnexion" class="text-center" action="index.php" method="post">
           <ul class="list-unstyled">
               <li><input type="text" class="my-2 col-9" name="pseudoConnect" placeholder="Pseudo"></li>
               <li><input type="password" class="my-2 col-9" name="pwdConnect" placeholder="Mot de passe"></li>
           </ul>
           <br />
           <div class="modal-footer">
             <button type="button" class="btn modal-btn" data-dismiss="modal">Annuler</button>
             <button type="submit" name="formConnexion" class="btn modal-btn">Valider</button>
           </div>
       </form>
     </div>
   </div>
 </div>
</div>
<!-- Fin du modal connexion -->


<?php include 'affichage.php' ?>



<!-- Actions possibles de l'upload files -->

<div class="col-6 offset-3 fileChooser p-3">
    <form class="text-center" action="uploads/store.php" method="post" enctype="multipart/form-data">
        <div class="col-12 mb-2">
            <label for="fileToUpload" class="label-file">Parcourir fichiers...</label>
            <input class="input-file" type="file" name="fileToUpload" id="fileToUpload">
        </div>
        <div class="col-12 mb-2">
            <button type="submit" name="envoiFile" value="Upload Image" class="btn last-btn">Envoyer</button>
        </div>
    </form>
</div>

<!-- Fin actions possibles de l'upload files -->

<!-- Afficher l'activité du compte -->

<div class="col-6 offset-3 fileChooser p-3">
    <form class="text-center" action="listfile.php" method="post" enctype="multipart/form-data">
        <div class="col-12 displayActivity">
            <button id="activity" type="button" class="btn last-btn" name="listfiles">Activités</button>
        </div>
        <div class="col-12" id="resultList">
            <?php
            if(isset($_SESSION ['id'])){
                listActivity();
            }
            ?>
        </div>
    </form>
</div>

<!-- Fin afficher l'activité du compte -->


<?php include 'footer.php'; ?>
