<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5</title>
    <style>
        .kotak1 {
            
            padding: 10px;
            border:2px solid  red;
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 10px;
            margin-right:20px;

        }
        .kotak2{
        border: 5px solid #A52A2A;    
            padding: 10px;
            margin: 10px;
            width: 300px;
        }
    </style>
</head>
<body>
<div class="kotak2"> 
    <?php
    for ($awaluddin=1 ; $awaluddin <= 5; $awaluddin++) {
        for ($awal=1; $awal <= $awaluddin; $awal++) {
            echo "<div class='kotak1'>" . $awal . "</div>";
        }
        echo "<br>"; 
    }
    ?>
</div>
</body>
</html>