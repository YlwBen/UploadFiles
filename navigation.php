<?php

    if(isset($_SESSION['id']) AND ($_SESSION['id'] > 0)){
        echo "
        <nav id='navigation' class='navbar navbar-expand-lg navbar-light mainNav'>
            <h1 class='navbar-brand mainTitle col-10'>File Uploader</h1>
            <button class='navbar-toggler burgerBtn' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse col-12 col-lg-1' id='navbarSupportedContent'>
                <a id='btnDeconnexion' type='button' class='btn' href='uploads/deconnexion.php'>Déconnexion</a>
            </div>
        </nav>";
    }else{
        echo "
        <nav id='navigation' class='navbar navbar-expand-lg navbar-light mainNav'>
            <h1 class='navbar-brand mainTitle col-9'>File Uploader</h1>
            <button class='navbar-toggler burgerBtn' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse col-12 col-lg-2' id='navbarSupportedContent'>
                <ul class='navbar-nav mr-auto'>
                    <li class='nav-item'>
                        <button id='btnInscription' type='button' class='btn' data-toggle='modal' data-target='#inscriptionModal'>
                            Inscription
                        </button>
                    </li>
                    <li class='nav-item'>
                        <button id='btnConnexion' type='button' class='btn' data-toggle='modal' data-target='#connexionModal'>
                            Connexion
                        </button>
                    </li>
                </ul>
            </div>
        </nav>";
    }

 ?>
