<?php
 
 include("config.php");

 // cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){


    //ambil dari data dari formulir
    $siswa =$_POST['siswa'];
    $kelas =$_POST['angka'];
    $jurusan =$_POST['jurusan'];
    $tanggal =$_POST['Tanggal'];
    $email =$_POST['email_pengunjung'];


    //buat query
    $sql = "INSERT INTO calon_siswa (siswa,angka,jurusan,Tanggal,email_pengunjung) VALUE ('$siswa','$kelas','$jurusan','$tanggal','$email')";
    $query = mysqli_query($db, $sql);

       // apakah query simpan berhasil?
      if( $query ) {
   //     // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
   } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


//} else {
   // die("Akses dilarang...");
}

?>