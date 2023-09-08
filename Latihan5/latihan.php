<?php
// Superglobals
// variabel global milik php
// merupakan Array Associative
// $_GET

$mahasiswa = [
    [
     "nama" => "Ferin Dakus",
     "nrp" => "206890024",
     "email" => "ferin@gmail.co.id",
     "jurusan" => "Teknik Informatika",
    "gambar" => "foto5.jpg"
    ],
    [
"nama" => "Hafidz Qolbi",
"nrp" =>  "254900105",
"email" => "qolbihafd@gmail.com",
"jurusan" => "Teknik Industri",
"gambar" => "foto6.jpg"

]
];
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
<li>
<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=
<?= $mhs["nrp"]; ?>&email=
<?= $mhs["email"]; ?>&jurusan=
<?= $mhs["jurusan"]; ?>&gambar=
<?= $mhs["gambar"]; ?>"><?=$mhs["nama"];  ?></a>
</li>
<?php endforeach; ?>
</ul>


</body>
</html>