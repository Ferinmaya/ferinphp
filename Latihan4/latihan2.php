<?php
// $mahasiswa = [
    //["Ferin Dakus", "206890024", "ferin@gmail.co.id", 
// "Teknik Informatika"],
// ["Hafidz Qobli", "254900105", "qolbihafd@gmail.com",
// "Teknik Industri"]

//array associative
// definisinya sama seperti array numerik,kecuali
//key-nya adalah string yang kita buat sendiri 
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
    <title>Daftar Mahasiswa</title>
</head>
<body>



<h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as  $mhs ) : ?>

<ul>
<li><img src="img/<?= $mhs ["gambar"]; ?>" width="150px"></li>
<li>Nama : <?= $mhs["nama"]; ?></li> 
<li>NRP : <?= $mhs["nrp"]; ?></li> 
<li>Jurusan : <?= $mhs["jurusan"]; ?></li> 
<li>Email : <?= $mhs["email"]; ?></li> 
</ul>

<?php endforeach; ?>
   
</body>
</html>