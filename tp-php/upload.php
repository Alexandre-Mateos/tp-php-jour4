<?php
var_dump($_FILES);
$target_file = "uploads/" . uniqid() . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) ;
$uploadOk = true;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


 // vérifier le format des fichiers
if ($imageFileType !== "jpeg" && $imageFileType !== "png"){
      echo "Désolé. Seul les fichiers au format jpeg et png sont acceptés"."<br>";
      $uploadOk = false;
}

// On vérifie si $uploadOk est à false, et on informe l'utilisateur
if (!$uploadOk) {
      echo "Chargement échoué"."<br>";

// Sinon on lance le chargement
} else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
            echo "Désolé, erreur de chargement";
      }
}

?>