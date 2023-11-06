<?php

$data = [
    [
        "nama" => "Harimau Sumatera",
        "deskripsi" => "Faktor penyebab populasi dan habitat harimau berkurang secara drastis di antaranya perburuan oleh manusia, pembukaan hutan untuk lahan pertanian, dan pembukaan kawasan untuk permukiman..",
        "lokasi" => "Habitatnya tersebar di Sumatera.",
        "gambar" => "harimau su.jpg",
        "NRP" => "701220212"
],
[
        "nama" => "Gajah Asia",
        "deskripsi" => "Gajah Asia sekarang termasuk ke dalam hewan yang terancam punah. Sejak tahun 1700-an peneliti mengungkapkan bahwa habitat mereka terkikis sebesar 64% (setara 3,3 juta kilometer persegi) di 13 negara.",
        "lokasi" => "Ditemukan di berbagai negara Asia.",
        "gambar" => "gajah.jpg",
        "NRP" => "701220212"
],
    [
        "nama" => "orangutang borneo",
        "deskripsi" => "Orang utan (Pongo pygmaeus) menjadi salah satu hewan yang terancam punah, sehingga sangat dilindungi keberadaannya. Sebagian besar karena penebangan hutan tempat mereka tinggal dan penangkapan untuk perdagangan hewan peliharaan eksotis.",
        "lokasi" => "Habitatnya terutama di hutan Borneo.",
        "gambar" => "orangutan.jpg",
        "NRP" => "701220212"
],
    [
        "nama" => "Harimau Siberia",
        "deskripsi" => "Hewan buas ini banyak diburu sehingga menjadikan mereka sebagai hewan yang terancam punah. Bulu harimau Siberia dijual di banyak pasar gelap dan beberapa orang bahkan menganggap daging hewan ini sebagai makanan lezat.",
        "lokasi" => "Tersebar di Rusia dan Asia Utara.",
        "gambar" => "harimau.jpg",
        "NRP" => "701220212"
],
    [
        "nama" => "Paus Biru",
        "deskripsi" => "Populasi paus biru di Antartika berkurang secara drastis akibat perburuan paus komersial, yang dimulai di Samudera Atlantik bagian selatan pada 1904. Meski ada perlindungan hukum melalui Komisi Penangkapan Ikan Paus Internasional pada 1960-an, ini tak menghentikan perburuan ilegal hingga 1972.",
        "lokasi" => "Ditemukan di berbagai lautan dunia.",
        "gambar" => "paus.jpg",
        "NRP" => "701220212"
],
[
    "nama" => "badak jawa",
    "deskripsi" => "spesies ini bisa ditemukan di hampir seluruh Asia Tenggara. Kini penurunan jumlah yang drastis akibat perburuan dan hilangnya habitat, menjadikannya sebagai badak jawa sebagai salah satu spesies badak paling langka.",
    "lokasi" => "hanya dapat ditemukan dipulau jawa.",
    "gambar" => "badak.jpg",
    "NRP" => "5678901234"
],
    [
    "nama" => "Gorila gunung",
    "deskripsi" => " gorila gunung terdaftar sebagai spesies yang terancam punah dengan jumlah populasi sekitar 1.000 individu di alam liar. Kepunahan ini dikarenakan lanskap Virunga yang tidak stabil secara sosial politik.",
    "lokasi" => "Kongo dan Taman Nasional Bwindi Impenetrable di Uganda.",
    "gambar" => "gorila.jpg",
    "NRP" => "701220212"

    ],
[
    "nama" => "Macan Tutul Amur",
    "deskripsi" =>"Macan tutul Amur yang tersisa menghadapi banyak ancaman terhadap kelangsungan hidup mereka, termasuk hilangnya dan fragmentasi habitat, kelangkaan mangsa, dan infrastruktur transportasi seperti jalan raya. ",
    "lokasi" => "Timur Rusia dan Timur Laut China .",
    "gambar" => "macan.jpg",
    "NRP" => "701220212"
],
[
    "nama" => "Penyu Sisik",
    "deskripsi" =>"populasi penyu sisik di seluruh dunia telah berkurang setidaknya 80% sebagai konsekuensi dari penangkapan yang tidak disengaja oleh alat tangkap, degradasi habitat persarangan, kerusakan terumbu karang dan perdagangan ilegal cangkang dan produk penyu sisik. ",
    "lokasi" => "perairan tropis dan subtropis dekat pantai Atlantik, Hindia, dan Samudra Pasifik.",
    "gambar" => "penyu.jpg",
    "NRP" => "701220212"

],
["nama" => "Saola",
    "deskripsi" =>"IUCN memperkirakan, total populasi saola kurang dari 750 ekor, kemungkinan jauh lebih sedikit.",
    "lokasi" => "ditemukan di Deretan Annam di Vietnam dan Laos.",
    "gambar" => "saola.jpg",
    "NRP" => "701220212"
],
];


echo "<table border='1'>
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Lokasi</th>
            <th>Gambar</th>
            <th>Kategori</th>
        </tr>";

foreach ($data as $item) {
    echo "<tr>";
    echo "<td>" . $item["nama"] . "</td>";
    echo "<td>" . $item["deskripsi"] . "</td>";
    echo "<td>" . $item["lokasi"] . "</td>";
    echo "<td><img src='" . $item["gambar"] . "' alt='" . $item["nama"] . "' width='100'></td>";
    echo "<td>Flora-fauna terancam punah</td>";
    echo "</tr>";
}

echo "</table>";
?>
