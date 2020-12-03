<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru </title>
<style>
body {
	                background: linear-gradient(darkblue, indigo); /* Standard syntax */
	               background: -webkit-linear-gradient(darkblue, indigo); /* For Safari 5.1 to 6.0 */
	               background: -o-linear-gradient(darkblue, indigo); /* For Opera 11.1 to 12.0 */
	              background: -moz-linear-gradient(darkblue, indigo); /* For Firefox 3.6 to 15 */
                 background-size: cover;
                  background-repeat: no-repeat;
}
.wrapper{
        width: 750px;
        height: 1200px;
        border-radius: 1%;
        background-color: #fff;
        border: 2px solid #7e7c7c;
    }
 .header{
     background-image: url(header.jpg);
     width: 100%;
     height: 150px;
     padding-top: 20px;
     text-align: center;
}
.sidebar{
	            padding:  5px;
              width:  28%;
              height :  1020px;
	           background-color	:  #f5f5f5;
	           position 	:  relative;
	           float	:  left;
	           border-style	:  dotted;
	           border-width	:  1px;
}
.sidebar ul {
	                 margin 				: 0;
	                 padding 			: 0;
	                 list-style 			: none;
}
.sidebar ul li a {
	                      float:  left;
	                      color: #0000FF;
	                      padding: 12px;
                         margin: 8px;
                         border: 1px  solid    #808080 ;
                         border-radius: 10%;
	                      text-decoration : none;
	                      text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.6);
}
h3{
 background: lightgray;
 padding: 5px;
 text-align:center;
}
</style>
</head>
<body>
<div class=" gradient">
   <div class="wrapper">
       <div class="header">
		<h1><u>Membuat CRUD Dengan PHP Dan MySQL</u></h1>
  <h2>Menampilkan data dari database</h2>
        <br>
       </div>
        <div class="sidebar">
    <h3>Pendaftaran Siswa</h3>
    <h4>  Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.html">Daftar siswa Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
       </div>
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
   </div>
</div>
    </body>
</html>
