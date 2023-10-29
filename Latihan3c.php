
<?php
function Pangkat($angka, $pangkat) {
      return pow($angka,$pangkat);
}
    $angka = 5; 
    $pangkat = 4;
    $hasilpangkat = Pangkat($angka,$pangkat);
    echo" $angka pangkat $pangkat = $hasilpangkat";
?>
