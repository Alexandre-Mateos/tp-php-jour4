<form method="post">
      <label for="nom">Nom</label>
      <input id="nom" type="text" name="nom">
      <label for="prenom">Prenom</label>
      <input id="prenom" type="text" name="prenom">
      <label for="age">Age</label>
      <input id="age" type="number" name="age">

      <button type="submit">Valider</button>
</form>

<?php if(
      (isset($_POST["prenom"]) && strlen($_POST["prenom"])>1)
      && (isset($_POST["nom"]) && strlen($_POST["nom"])>1)
      && (isset($_POST["age"]) && strlen($_POST["age"])>1)
) : ?>
<p>Bonjour <?php echo $_POST["prenom"] ?> <?php echo $_POST["nom"] ?>, vous avez <?php echo $_POST["age"] ?>  </p>
<?php else : ?>
<p>Vous devez remplir tous les champs !</p>
<?php endif; ?>