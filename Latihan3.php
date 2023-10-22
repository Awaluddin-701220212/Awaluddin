<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            width: 200px;
            height: 200px;
            border : 4px solid ;
        }
        .box {
            width: 50px;
            height: 50px;
            border: 2px solid gray;
            display: inline-block;
            text-align: center;
            vertical-align: middle;
            line-height: 50px;
            margin: 5px;   
        }
    </style>
</head>
<body>
    <?php
        $hurufA = 'A';
        $hurufB = 'B';
        $hurufC= 'C';
    ?>

    <div class="box"><?php echo $hurufA ;?>  </div> <br>
     
    <div class="box"><?php echo $hurufA;?></div><div class="box"><?php echo $hurufB;?></div><br>
     
    <div class="box"><?php echo $hurufA;?></div><div class="box"><?php echo $hurufB;?></div><div class="box"><?php echo $hurufC;?></div> 
     
</body>
</html>