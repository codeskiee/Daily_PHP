<!DOCTYPE html>
<html>
    <head>
        <title>
            Belajar Menggunakan Form
        </title>
    </head>
    <body>
        <h2>File PHP untuk mengolah data form dengan POST</h2>
        <br/>
  
<?php
    echo "<p>BERIKUT DATA ANDA :</P>";
    echo "<br/><br/>"; 
    
    echo "ID Pegawai :", $_POST['idpegawai'];
    echo "<br/><br/>"; 
    echo "Nama Anda :", $_POST['nama'];
    echo "<br/><br/>";
    echo "Alamat :",$_POST['alamat'];
?>
    </body>
</html>