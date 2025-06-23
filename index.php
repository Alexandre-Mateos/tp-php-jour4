<!--Les formulaires peuvant être traité soient avec $_GET ou $_POST.
Pour faire ça dans la balise form on ajoute methode="get" ou méthode="post".
 Il faut absolument qu'il y ait l'attribut name="key" das l'input, sinon php ne passe
 pas les variables dans l'URL, donc irrécupérable avec $_GET-->

<!--<form méthode="get">-->
<!--      <label for="test-input">Test input</label>-->
<!--      <input type="text" id="test-input" name="test-input">-->
<!---->
<!--      <button type="submit">Valider</button>-->
<!--</form>-->
<!---->


<!--en utilisant post:-->
<!--Avec $_POST, les données sont envoyées de manière cachées. On utilise généralement $_POST pour envoyer les-->
<!--données sensibles comme les mot de passe.-->

<form action="traitement.php" method="post">
      <label for="test-input">Test input</label>
      <input type="text" id="test-input" name="test-input">

      <div>
            <label for="checkbox-1">checkbox 1</label>
            <input id="checkbox-1" type="checkbox" value="1" name="checkbox[]">

            <label for="checkbox-2">checkbox 2</label>
            <input id="checkbox-2" type="checkbox" value="2" name="checkbox[]">

            <label for="checkbox-3">checkbox 3</label>
            <input id="checkbox-3" type="checkbox" value="3" name="checkbox[]">
      </div>

      <button type="submit">Valider</button>
</form>

<?php
var_dump($_POST);
?>

<!--$_GET peut être utile pour des champs de recherche (comme sur amazon par exemple).-->

<!--L'attribut action sert à choisir ou les données récupérées vont être traitées.-->
<!--Par exemple dans le fichier traitement.php .-->
<!--L'input de type file ne se traite pas avec $_POST ou $_GET, mais avec $_FILE.-->