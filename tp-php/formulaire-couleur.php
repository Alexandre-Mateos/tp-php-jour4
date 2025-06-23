<body style="background-color: <?php echo $_POST["couleur"] ?>">
<form method="post">
      <input type="text" name="prenom" placeholder="Votre prénom">
      <select name="couleur">
            <option value="white">Blanc</option>
            <option value="lightblue">Bleu clair</option>
            <option value="lightgreen">Vert clair</option>
            <option value="lightpink">Rose clair</option>
            <option value="beige">Beige</option>
      </select>
      <button type="submit">Valider</button>
</form>
</body>

<?php if (isset($_POST["prenom"]) && strlen($_POST["prenom"])>1 && isset ($_POST["couleur"])): ?>

      <p>Bonjour <?php echo htmlspecialchars($_POST["prenom"]) ?>, ta couleur préférée est <?php echo $_POST["couleur"] ?>.</p>
<?php else : ?>

      <p>Bienvenue ! Choisis ta couleur préférée.</p>

<?php endif; ?>