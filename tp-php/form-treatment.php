<?php
if(isset($_POST["country"]) && strlen($_POST["country"]) >= 1){
      $country = trim(htmlspecialchars($_POST["country"]));
      $countryRequest = "https://restcountries.com/v3.1/name/" . $country . "?fullText=true";
      $dataCountry = file_get_contents($countryRequest);
      $dataCountryDecoded = json_decode($dataCountry, true);
      var_dump($dataCountryDecoded);

}else{

}
?>