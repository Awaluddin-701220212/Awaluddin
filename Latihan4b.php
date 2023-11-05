
<?php

$asean_countries = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand");

echo "<h3>Daftar Negara ASEAN awal:</h3>";
echo "<ul>";
foreach ($asean_countries as $country) {
  echo "<li>$country</li>";
}
echo "</ul>";

array_push($asean_countries, "Laos", "Filipina", "Myanmar");

echo "<h3>Daftar Negara ASEAN baru:</h3>";
echo "<ul>";
foreach ($asean_countries as $country) {
  echo "<li>$country</li>"; 
}
echo "</ul>";

?>


