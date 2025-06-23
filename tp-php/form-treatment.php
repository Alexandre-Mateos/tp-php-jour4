<?php
if(isset($_POST["country"]) && strlen($_POST["country"]) >= 1) {

      $country = trim(htmlspecialchars($_POST["country"]));
      $countryRequest = "https://restcountries.com/v3.1/name/" . $country . "?fullText=true";
      $dataCountry = @file_get_contents($countryRequest);
        if($dataCountry){
              $dataCountryDecoded = json_decode($dataCountry, true);
              var_dump($dataCountryDecoded);
        }else{
              header("Location: http://localhost:8080/tp-php/form-country.php/?response=error1");
              exit();
        }
}else{
    header("Location: http://localhost:8080/tp-php/form-country.php/?response=error2");
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
</head>
<body>

<?php if(isset($dataCountryDecoded[0]["name"]["official"]) && strlen($dataCountryDecoded[0]["name"]["official"]) >= 1) : ?>
<p> Nom officiel : <?php echo $dataCountryDecoded[0]["name"]["official"] ?></p>
<?php else : ?>
<p>Ce pays est inconnu</p>
<?php endif; ?>


</body>
</html>


