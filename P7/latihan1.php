<?php 
// $_GET

$mahasiswa = [
    [
        "nrp" => "023401230",
        "nama" => "Figur Ulul Azmi",
        "email" => "figurululazmi@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "figur.jpg"
    ],
    [
        "nrp" => "023401320",
        "nama" => "Ulul Azmi Figur",
        "email" => "ululazmifigur@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "azmi.jpg"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach( $mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?
                nama=<?= $mhs["nama"]; ?>
                &nrp=<?= $mhs["nrp"]; ?>
                &email=<?= $mhs["email"]; ?>
                &jurusan=<?= $mhs["jurusan"]; ?>
                &gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
