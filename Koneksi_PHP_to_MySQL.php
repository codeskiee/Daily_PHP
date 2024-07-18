<!DOCTYPE html>
<html>
    <head>
        <title>
            Menguji Koneksi Database
        </title>
    </head>
    <body>
    <?php
        $koneksi = mysqli_connect ('localhost','root','root123','db_sorak');
            if ($koneksi)
            {
                echo"<p style=\"color: green\">";
                echo "<b>Koneksi PHP dan MySQL terhadap Database db_sorak berhasil</b>";
                echo "<br/>";
                echo "</p>";
            }
            else
            {
                echo"<p style=\"color: red\">";
                    echo "<b>Koneksi PHP dan MySQL terhadap Database db_sorak gagal</b>";
                    echo "<br/>";
                    echo "</p>";
            }
            $panggil_db = mysqli_query($koneksi,"SELECT * FROM pegawai");
            echo "<h1> Tabel Data Pegawai</h1>";
            echo "<br/><br/>";
            echo "<table border = \"1\"><tr>";
                echo "<th>ID Pegawai</th>";
                echo "<th>Nama</th>";
                echo "<th>Alamat</th>";
            echo "<tr>";

            $baris_db = mysqli_fetch_row($panggil_db);
            echo "<tr><th>$baris_db[0]</th><th>$baris_db[1]</th><th>$baris_db[2]</th></tr>";
            $baris_db = mysqli_fetch_row($panggil_db);
            echo "<tr><th>$baris_db[0]</th><th>$baris_db[1]</th><th>$baris_db[2]</th></tr>";
            $baris_db = mysqli_fetch_row($panggil_db);
            echo "<tr><th>$baris_db[0]</th><th>$baris_db[1]</th><th>$baris_db[2]</th></tr>"
        ?>
    </body>
</html>