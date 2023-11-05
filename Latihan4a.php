<?php
$warna = array("hijau", "kuning", "kelabu", "merah muda");

echo "Balonku ada lima.";
echo "<br>";

echo "Rupa-rupa warna-nya ";
echo "<br>";

echo implode(", ", $warna);

array_push($warna, " biru");

echo " dan " . $warna[count($warna) - 1];
echo "<br>";

echo "Meletus balon " . $warna[0] . " DOR!!!";
echo "<br>";

echo "Hatiku sangat kacau.";
?>