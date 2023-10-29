<!DOCTYPE html>
<html>
<head>
<body>
    <style>
        .ganti_style {
    font-size: 28px;
    font-family: Arial;
    color: #1A0547;
    font-style: italic;
    font-weight: bold;
}
    </style>
    </head>
    <?php
    function ganti_style($tulisan, $kelas) {
        return '<p class="' . $kelas . '">' . $tulisan . '</p>';
    }

    $tulisan = "Hello world! Here I come !";
    $kelas = "ganti_style";

    echo ganti_style($tulisan, $kelas);
    ?>
</body>
</html>