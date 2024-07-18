<!DOCTYPE html>
<html>
    <head>
        <title>
        Menguji Koneksi Database - mysqli_fetch_row
        </title>
    </head>
    <body>
        <?php
        $koneksi = mysqli_connect('localhost','root','root123','db_sorak');
        if ($koneksi)
        {
            echo "<p style=\"color : green\">";
            echo "<b>Koneksi PHP dan MySQL terhadap database db_sorak berhasil</b>";
            echo "<br/>";
            echo "</p>";
        }
        else
        {
            echo "<p style=\"color : red\">";
            echo "<b> Koneksi PHP dan MySQL terhadap database db_sorak gagal</b>";
            echo "<br/>";
            echo "</p>";
        }
        $panggil_db = mysqli_query($koneksi, "SELECT * FROM pegawai");
        echo "<h1> Tabel Data Pegawai</h1>";
        echo "<br/><br/>";
        echo "<table border =\"1\"><tr>";
        echo "<th>ID Pengawai</th>";
        echo "<th>Nama</th>";
        echo "<th>Alamat</th>";
        echo "</tr>";
        
            while ($baris_db = mysqli_fetch_array($panggil_db,MYSQLI_ASSOC))
            {
                echo "<tr><th>";
                echo $baris_db['idpegawai'];
                echo "</th><th>";
                echo $baris_db['nama'];
                echo "</th><th>";
                echo $baris_db['alamat'];
                echo "</th></tr>";
            }
            ?>
            </table>
        </body>
</html>