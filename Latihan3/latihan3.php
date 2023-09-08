<?php 
$mahasiswa = [
    ["Ferin Dakus", "043040023", "Teknik Informatika", "ferindakus@gmail.com"],
    ["Hafidz Qolbi", "254901005", "Teknik Biologi", "qolbihafd@gmail.com"],
    ["Freya Rey", "982640035", "Teknik industri", "frereya@gmail.com"]
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
<li>Nama : <?= $mhs[0]; ?></li> 
<li>NRP : <?= $mhs[1]; ?></li> 
<li>Jurusan : <?= $mhs[2]; ?></li> 
<li>Email : <?= $mhs[3]; ?></li> 
</ul> 
<?php endforeach; ?>
</body>
</html>