<?php
require('models/countries.php');



function country(){
  $countryId = $_GET['country'];
  $country = getCountry($countryId);
  $bookCountry=getBookByCountry($countryId);
  require("views/countries.php");
}


?>
