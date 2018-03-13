<?php

include_once("config.php");

$folder = "uploads/";
$upload_image = $folder . basename($_FILES["fileToUpload"]["name"]);
if(isset($_POST["submit"])) {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $upload_image))
{
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). "uploaded.";

    $insert_query="INSERT INTO data (name, size, type, location) VALUES('$upload_image', '', '')";
    $con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $stmt = $con->prepare($insert_query);
    $stmt->execute();


    header( 'Location: fetch_image.php' );

} else {
    echo "Erreur upload File!.";
}
}

?>
