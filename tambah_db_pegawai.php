<!DOCTYPE html>
<html>
    <head>
        <title>
            Penambahan Data Pegawai
        </title>
    </head>
     
    <body>
        <?php
        $idpegawai = $_POST['idpegawai'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $koneksi = mysqli_connect('localhost','root','root123','db_sorak');

        mysqli_query($koneksi,"INSERT INTO pegawai VALUES ('$idpegawai','$nama','$alamat','$tgl_lahir')");

            echo "<h3>Database Pegawai telah ditambahkan</h3>";
            echo "<br/><br/>";
            echo "<p>";
            echo "ID Pegawai :$idpegawai";
            echo "<br/><br/>";
            echo "Nama : $nama";
            echo "<br/><br/>";
            echo "Alamat :$alamat";
            echo "<br/><br/>";
            echo "Tanggal Lahir :$tgl_lahir";
        ?>
    </body>
</html>