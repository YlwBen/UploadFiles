<?php
//include "bdd/ConnectBDD.php";


function listActivity(){
    $connect = connectBDD();
    $result = $connect->prepare("SELECT * FROM `data` WHERE `iduser` = ".$_SESSION ['id']." ORDER BY id DESC;");
    $result->execute();
    while ($data = $result->fetch()){
?>
        <p class="my-4 listActivity">
            <strong>Fichier</strong> : <?php echo $data['name']; ?>; <br />
            <strong>Type de fichier</strong> : <?php echo $data['type']; ?>; <strong>Taille du Fichier</strong> : <?php echo $data['size']; ?> octets; <strong>Date</strong> : <?php echo $data['date']; ?><br />
            <strong>Lien</strong> : <a href="uploads/img/<?php echo $data['location']; ?>" download="uploads/img/<?php echo $data['location']; ?>">Télécharger</a>.
        </p>
<?php
    }
    $result->closeCursor();
}

?>
