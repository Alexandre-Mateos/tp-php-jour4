<body>
<form method="post">
      <label for="nom">Nom</label>
      <input id="nom" type="text" name="nom">
      <label for="prenom">Prenom</label>
      <input id="prenom" type="text" name="prenom">
      <fieldset>
            <legend>Genre</legend>
            <input id="homme" type="radio" value="homme" name="genre">
            <label for="homme">Homme</label>
            <input id="femme" type="radio" value="femme" name="genre">
            <label for="femme">Femme</label>
            <input id="autre" type="radio" value="autre" name="genre">
            <label for="autre">Autre</label>
      </fieldset>
      <fieldset>
            <legend>Langages favoris</legend>
            <label for="php">PHP</label>
            <input id="php" type="checkbox" value="PHP" name="langage[]">
            <label for="javascript">Javascript</label>
            <input id="javascript" type="checkbox" value="Javascript" name="langage[]">
            <label for="python">Python</label>
            <input id="python" type="checkbox" value="Python" name="langage[]">
            <label for="c#">C#</label>
            <input id="c#" type="checkbox" value="C#" name="langage[]">
      </fieldset>
      <label for="my-text">Votre histoire</label>
      <textarea id="my-text" name="my-text"></textarea>

      <button type="submit">Valider</button>
</form>
</body>

<?php
if (
      (isset($_POST["nom"]) && strlen($_POST["nom"]) >= 1)
      && (isset($_POST["prenom"]) && strlen($_POST["prenom"]) >= 1)
      && (isset($_POST["genre"]))
      && (isset($_POST["langage"]))
      && (isset($_POST["my-text"]) && strlen($_POST["my-text"]) >= 1)
) : ?>

      <p>Bonjour <?php echo htmlspecialchars($_POST["prenom"]) ?> <?php echo htmlspecialchars($_POST["nom"]) ?> !</p>

      <p> Vous êtes un(e) <?php echo $_POST["genre"] ?> et vous aimez coder en :
            <?php echo implode( ", " ,$_POST["langage"]) ?> .</p>

      <p>Voici ce que vous avez écrit à propos de vous :</p>
      <p>"<?php echo htmlspecialchars($_POST["my-text"]) ?>"</p>

<?php else : ?>

      <p>Vous devez remplir tous les champs !</p>

<?php endif; ?>

