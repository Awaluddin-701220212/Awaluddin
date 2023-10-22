<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($a = 2; $a <= sqrt($number); $a++) {
        if ($number % $a == 0) {
            return false;
        }
    }
    return true;
}
echo "Pengulangan untuk Mencari kategori bilangan :<br>";
for ($b = 1; $b <= 19; $b++) {
     echo "<br>";
    if ($b % 2 == 0) {
        echo "Angka $b adalah bilangan genap";
    } else {
        echo "Angka $b adalah bilangan ganjil";
    }

    if (isPrime($b)) {
        if ($b > 10) {
            echo " dan sekaligus bilangan prima";
        } else {
            echo " sekaligus bilangan prima";
        }
    }
}
?>