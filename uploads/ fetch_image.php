<?php
// include_once("../bdd/ConnectBDD.php");
include_once("config.php");

$con= new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
$up = $con->prepare("SELECT * FROM data");

$up->execute();
while ($row = $up->fetch(PDO::FETCH_ASSOC)){

$image_name=$row["name"];
echo "<img src=".$image_name." width=100 height=100/>"?>
}
?>
