<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru </title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="judul" background-image:linear-gradient(red,blue)>		
		<h1 align ="center"><u>Membuat CRUD Dengan PHP Dan MySQL</u></h1>
        <h2 align="center">Menampilkan data dari database</h2>
        <br>
    <h2>Pendaftaran Siswa</h2>
    <h3>  Menu</h3>
    <nav>
        <div class="body">
        <ul>
            <li><a href="form-daftar.php">Daftar siswa Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    </body>
</html>