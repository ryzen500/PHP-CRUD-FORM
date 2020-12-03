<!DOCTYPE html>
<html>
<head>
    <style>
    body{
    background-color: #bf75dd;
    font-family: 'Times New Roman', Times, serif;
    display: block;
    }
    .wrapper {
	    width: 500px;
        margin: 40px auto 40px auto;
        border-radius: 1%;
        background-color: #e6dede;
        border: 2px solid #7e7c7c;
    }
    h2{
        font-size: 25px;
        line-height:13px;
    }
    .kotak {
        position: relative;
        left: 25px;
        width: 450px;
        height: 80px;
        text-indent:5%;
        background-color: #e6dede;
        border: 2px solid #d6cfcf;
        border-radius: 5%;
        }
    .kotak1 {
        position: relative;
        width: 500px;
        background-color: #e6dede;
        border-radius: 5%;
        }
    .submit{
        position: relative;
        left: 20px;
    }
    label{
        position: relative;
        left: 20px;
    }
    select{
        position: relative;
        left: 25px;
    }
    </style>
    </head>
<title>Form Login siswa</title>
    <body>
    <form action="proses-pendaftaran.php" method="POST">

        <div class="wrapper">
            <div class="kotak1">
                <img src="w.jpg" width="499" height="125"/>
            </div>
                <p></p>
                    <div class="kotak">
                <h2>Absensi Siswa SMKN 101</h2>
                <p>Silahkan Masukan Data Anda:</p>
                    </div>
                <p>  </p>
                    <div class="kotak">
                        <p> </p>
                        <label for="siswa">Nama:</label><p></p>
                        <select name="siswa" id="siswa">
                            <option>Pilih</option>
                            <option > Achmad Tsany Wicaksono</option>
                            <option> Amelia Dwi Cahyani</option>
                            <option > Lia Ananta Putri</option>
                            <option > Siti Nur Aini</option>
                        </select>
                    </div>
                <p>  </p>
                    <div class="kotak">
                <p>kelas:</p>
                 <p><input type="number" name="angka" min="10" max="13" value="Angka"/></p>
                    </div>
                <P></P>
                    <div class="kotak">
                <p></p>
                <label for="jurusan">Jurusan:</label><p></p>
                        <select name="jurusan" id="jurusan">
                            <option>Pilih</option>
                    <option > RPL 1</option>
                    <option > RPL 2</option>
                    <option> ANI 1</option>
                    <option > ANI 2</option>
                    </select>
                    </div>
                <p>  </p>
                    <div class="kotak">
                <p>Tanggal:</p> 
                <p><input type="date" name="Tanggal"  /></p>
                    </div>
                <p>  </p>
                    <div class="kotak"> 
                <p>Email:</p> 
                <p><input type="email" name="email_pengunjung" /></p>
                    </div>
                    <p></p>
                <div class="submit">
                <input type="submit" value="Submit" name="submit">
                </div>
            </div> 
        </form>
    </div>
    </body>
</html>
