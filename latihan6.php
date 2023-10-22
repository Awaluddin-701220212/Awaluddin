<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6</title>
    <style>
        .box1 {
            padding: 10px;
            border: 2px solid black;
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 10px;
        }
        .box2 {
            border: 5px solid #A52A2A;
            padding: 10px;
            margin: 10px;
            width: 300px;
        }
        
        .ganjil{
            background-color: black;
            color: white;
        }
        .genap{
            background-color: lightgray;
            color: black;
        }
        
    </style>
</head>
<body>
<div class="box2"> 
    <?php
    for ($a = 1; $a <= 5; $a++) {
        $Awaluddin = ($a % 2 == 0) ? 'genap' : 'ganjil';

        for ($b = 1; $b <= $a; $b++) {
            echo "<div class='box1 $Awaluddin'>" . $b . "</div>";
        }
        echo "<br>"; 
    }
    ?>
</div>
</body>
</html>