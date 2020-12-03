<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['submit'])){

  
    //ambil dari data dari formulir
    $id =$_POST['id'];
    $siswa =$_POST['siswa'];
    $kelas =$_POST['angka'];
    $jurusan =$_POST['jurusan'];
    $tanggal =$_POST['Tanggal'];
    $email =$_POST['email_pengunjung'];


     // buat query update
     $sql = "UPDATE calon_siswa SET siswa='$siswa', angka='$kelas', jurusan='$jurusan', Tanggal='$tanggal', email_pengunjung='$email' WHERE id=$id";
     $query = mysqli_query($db, $sql);

      // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-siswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>