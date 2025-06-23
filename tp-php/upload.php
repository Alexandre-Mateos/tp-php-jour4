<?php
var_dump($_FILES);
$target_directory = "uploads/";
$target_file = $target_directory . uniqid() . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


 // vérifier le format des fichiers
if ($imageFileType !== "jpeg" && $imageFileType !== "png"){
      echo "Désolé. Seul les fichiers au format jpeg et png sont acceptés";
      $uploadOk = 0;
}

// On vérifie si $uploadOk est à 0, et on informe l'utilisateur
if ($uploadOk === 0) {
      echo "Désolé. Chargement échoué";

// Sinon on lance le chargement
} else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
            echo "Sorry, there was an error uploading your file.";
      }
}

?>