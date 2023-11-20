<?php
 
 echo "<h3>Nama : Awaluddin <h3>";
 echo "<h3>Nim  : 701220212 <h3>";
 echo "<h3>UTS  :Programan Web 2<h3>";
$tabel_harga = [
    ["Produk", "Stok", "Harga" , "Jumlah"],
    ["Minyak Telon", 20, 30000],
    ["Diapers", 25, 51000],
    ["Baby Oil", 15, 16000],
    ["Shampo Baby", 20, 20000],
    ["Bedak", 15, 15000],
    ["Baju Bayi", 20, 35500],
    ["Jumper", 25, 50000]
];
$pembelian = [
    ["Baju Bayi", 3],
    ["Diapers", 5],
    ["Bedak", 1],
    ["Minyak Telon", 2],
    ["Baby Oil", 3]
];

$tanggal_transaksi = "20 November 2023";

for ($i = 1; $i < count($tabel_harga); $i++) {
    $tabel_harga[$i][] = $tabel_harga[$i][1] * $tabel_harga[$i][2]; 
}

$total_pembelian_sebelum_diskon = 0;
foreach ($pembelian as $beli) {
    $produk = $beli[0];
    $jumlah = $beli[1];

    $harga_satuan = 0;
    foreach ($tabel_harga as $item) {
        if ($item[0] === $produk) {
            $harga_satuan = $item[2];
            break;
        }
    }

    $total_pembelian_sebelum_diskon += $jumlah * $harga_satuan;
}

$diskon = 0;
if ($total_pembelian_sebelum_diskon >= 300000) {
    $diskon = 0.2; 
} elseif ($total_pembelian_sebelum_diskon >= 200000) {
    $diskon = 0.1; 
}

$total_setelah_diskon = $total_pembelian_sebelum_diskon - ($total_pembelian_sebelum_diskon * $diskon);

echo "<h2>Detail Transaksi</h2>";
echo "<p>Tanggal Transaksi: $tanggal_transaksi</p>";

echo "<table border='1'>";
foreach ($tabel_harga as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<p>Keterangan Diskon: ";
if ($diskon > 0) {
    echo "$diskon% ";
} else {
    echo "Tidak ada diskon yang diterapkan";
}
echo "</p>";

echo "<table border='1'>";
echo "<tr><th>Produk</th><th>Jumlah Beli</th><th>Harga Satuan</th><th>Jumlah</th></tr>";
foreach ($pembelian as $beli) {
    $produk = $beli[0];
    $jumlah = $beli[1];

    $harga_satuan = 0;
    foreach ($tabel_harga as $item) {
        if ($item[0] === $produk) {
            $harga_satuan = $item[2];
            break;
        }
    }

    echo "<tr><td>$produk</td><td>$jumlah</td><td>$harga_satuan</td><td>" . ($jumlah * $harga_satuan) . "</td></tr>";
}

echo "<tr><td colspan='3' style='text-align:right;'>Total</td><td>$total_pembelian_sebelum_diskon</td></tr>";

echo "<tr><td colspan='3' style='text-align:right;'>Keterangan Diskon</td><td>";
if ($diskon > 0) {
    echo "$diskon% ";
} else {
    echo "Tidak ada diskon yang diterapkan";
}
echo "</td></tr>";

echo "<tr><td colspan='3' style='text-align:right;'>Total Setelah Diskon</td><td>$total_setelah_diskon</td></tr>";

echo "</table>";

?>