<?php include 'header.php' ?>

<div class="container-fluid box">
    <h1 class="col-12 text-center">Upload Files !</h1>
</div>

      <!-- Navigation haut de page // A finir, faire entièrement en js ?-->
<nav id="navigation" class="navbar navbar-expand-lg navbar-light box">
    <button class="col-12 text-center navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <button type="button" class="btn" data-toggle="modal" data-target="#inscriptionModal">
                    Inscription
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn" data-toggle="modal" data-target="#connexionModal">
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
        <form class="text-center" action="index.php" method="post">
            <ul>
                <li><input type="text" name="nom" placeholder="Nom"></li>
                <li><input type="text" name="prenom" placeholder="Prenom"></li>
                <li><input type="text" name="mail" placeholder="Adresse e-mail"></li>
                <li><input type="text" name="mdp" placeholder="Mot de passe"></li>
            </ul>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Validation</button>
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
       <form class="text-center" action="index.php" method="post">
           <ul>
               <li><input type="text" name="mail" placeholder="Adresse e-mail"></li>
               <li><input type="text" name="mdp" placeholder="Mot de passe"></li>
           </ul>
       </form>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <button type="button" class="btn btn-primary">Validation</button>
     </div>
   </div>
 </div>
</div>
   <!-- Fin du modal connexion -->
<?php include 'footer.php' ?>
