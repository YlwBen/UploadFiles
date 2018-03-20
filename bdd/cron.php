<?php
include 'ConnectBDD.php';
// include 'fetch.php';
$connect=connectBDD();

// effacer les nom de fichiers dans la BDD nonLog = PUBLIC

function deleteFileFromDB($connect) {

$stmt = $connect->prepare("DELETE FROM data WHERE date < time(NOW()-1000)");

$stmt->execute();

}

// effacer les fichiers PUBLIC sur le disque

function selectFileAndDeleteFile($connect){

 $stmt = $connect->prepare("SELECT * FROM data WHERE date < time(NOW()-1000)");

 $stmt->execute();

 $table = array();


 $stmt->setFetchMode(PDO::FETCH_ASSOC);

 $i = 0;



 while($row = $stmt->fetch()) {

     $table[$i] = "../uploads/img/".$row['name'];

     unlink($table[$i]);

     $i++;

 }

}

// effacer les nom de fichiers sur le disque avant la base de donnée impératif

selectFileAndDeleteFile($connect);

// effacer les nom de fichiers dans la BDD

deleteFileFromDB($connect);



// effacer les nom de fichiers dans la BDD Log = User

function deleteFileFromDBLog($connect) {

 $stmt = $connect->prepare("DELETE FROM `data` WHERE DATEDIFF(CURDATE(), date) > 1");

 $stmt->execute();

}

// effacer les fichiers LOG sur le disque

function selectFileAndDeleteFileLog($connect){

  $stmt = $connect->prepare("SELECT `date` FROM `data` WHERE DATEDIFF(CURDATE(), date) > 1");

  $stmt->execute();

  $table = array();

  $stmt->setFetchMode(PDO::FETCH_ASSOC);

  $i = 0;


  while($row = $stmt->fetch()) {

      $table[$i] = "../uploads/img/".$row['name'];

      unlink($table[$i]);

      $i++;

  }

}

selectFileAndDeleteFileLog($connect);


?>
