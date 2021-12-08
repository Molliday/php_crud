<?php 
$mahasiswa = [
    ["Figur ", "143523235", "Teknik Sipil", "figur@gmail.com"],
    ["Azmi ", "1435122335", "Teknik Kimia", "azmi@gmail.com"],

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs) :?>
    <ul>
        <li><?= $mhs[0]; ?></li>
        <li><?= $mhs[1]; ?></li>
        <li><?= $mhs[2]; ?></li>
        <li><?= $mhs[3]; ?></li>
    </ul>
<?php endforeach; ?>

</body>
</html>