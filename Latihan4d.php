<?php
$negara = array(
    array("Negara" => "Indonesia", "Ibukota" => "D.K.I. Jakarta", "Kode Telepon" => "+62"),
    array("Negara" => "Singapura", "Ibukota" => "Singapura", "Kode Telepon" => "+65"),
    array("Negara" => "Malaysia", "Ibukota" => "Kuala Lumpur", "Kode Telepon" => "+60"),
    array("Negara" => "Brunei", "Ibukota" => "Bandar Seri Begawan", "Kode Telepon" => "+673"),
    array("Negara" => "Thailand", "Ibukota" => "Bangkok", "Kode Telepon" => "+66"),
    array("Negara" => "Laos", "Ibukota" => "Vientiane", "Kode Telepon" => "+856"),
    array("Negara" => "Filipina", "Ibukota" => "Manila", "Kode Telepon" => "+63"),
    array("Negara" => "Myanmar", "Ibukota" => "Naypyidaw", "Kode Telepon" => "+95")
);


usort($negara, function ($a, $b) {
    return $a["Negara"] <=> $b["Negara"];
});
?>

<!DOCTYPE html>
<html>
<head>
    <title>Informasi Negara</title>
</head>
<body>

<table border="1">
    <tr>
        <th>Negara</th>
        <th>Ibukota</th>
        <th>Kode Telepon</th>
    </tr>
    <?php foreach ($negara as $data): ?>
        <tr>
            <td><?php echo $data["Negara"]; ?></td>
            <td><?php echo $data["Ibukota"]; ?></td>
            <td><?php echo $data["Kode Telepon"]; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
