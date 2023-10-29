<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .border {
            border: 2px solid black;
            display: inline-block;
            padding: 10px;
         }
    </style>
</head>
<body>
<?php
$jawabanIsset ="Isset adalah =  Digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum. Fungsi isset () mengembalikan false jika variabel pengujian berisi nilai NULL..<br><br>";
$jawabanEmpty ="Empty adalah = Empty digunakan untuk menggambarkan sesuatu yang tidak memiliki isi atau yang tidak terisi penuh. Misalnya, (gelas itu kosong) berarti gelas tidak berisi apa-apa.";

function soal($jawabanIsset,$jawabanEmpty){
    $style = "aturstyle";
    return "<span class='$style'>$jawabanIsset$jawabanEmpty</span>";
}

echo '<div class="border">' . soal($jawabanIsset, $jawabanEmpty) . '</div>';
?>
</body>
</html>