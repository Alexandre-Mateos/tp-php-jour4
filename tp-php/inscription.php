<body>
<form method="post">
      <label for="nom">Nom</label>
      <input id="nom" type="text" name="nom">
      <label for="prenom">Prenom</label>
      <input id="prenom" type="text" name="prenom">
      <fieldset>
            <legend>Genre</legend>
            <input id="homme" type="radio" name="genre">
            <label for="homme">Homme</label>
            <input id="femme" type="radio" name="genre">
            <label for="femme">Femme</label>
            <input id="autre" type="radio" name="genre">
            <label for="autre">Autre</label>
      </fieldset>
      <fieldset>
            <legend>Langages favoris</legend>
            <label for="php">PHP</label>
            <input id="php" type="checkbox" name="langage[]">
            <label for="javascript">Javascript</label>
            <input id="javascript" type="checkbox" name="langage[]">
            <label for="python">Python</label>
            <input id="python" type="checkbox" name="langage[]">
            <label for="c#">C#</label>
            <input id="c#" type="checkbox" name="langage[]">
      </fieldset>
      <label for="my-text">Votre histoire</label>
      <textarea id="my-text" name="my-text"></textarea>

      <button type="submit"></button>
</form>
</body>