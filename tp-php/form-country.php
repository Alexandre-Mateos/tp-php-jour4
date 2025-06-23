<body>
<form action="form-treatment.php" method="post">
      <label for="country">Country</label>
      <input id="country" name="country">
      <button type="submit">Send</button>
</form>
</body>

<?php if(!isset($_GET["response"])) : ?>
<p>Tape un nom de pays pour apprendre un truc !</p>
<?php elseif ($_GET["response"] === "error1") : ?>
<p>Ce pays ne semble pas exister. Réessaye !</p>
<?php elseif ($_GET["response"] === "error2") : ?>
<p>Merci d'indiquer un nom de pays !</p>
<?php endif; ?>
