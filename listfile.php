<?php
//include "bdd/ConnectBDD.php";


function listActivity(){
    $connect = connectBDD();
    $result = $connect->prepare("SELECT * FROM `data` WHERE `iduser` = ".$_SESSION ['id'].";");
    $result->execute();
    while ($data = $result->fetch()){
?>
        <p>
            <strong>Fichier</strong> : <?php echo $data['name']; ?>; <br />
            <strong>Type de fichier</strong> : <?php echo $data['type']; ?>; <strong>Taille du Fichier</strong> : <?php echo $data['size']; ?> octets; <strong>Date</strong> : <?php echo $data['date']; ?>
        </p>
<?php
    }
    $result->closeCursor();
}

?>