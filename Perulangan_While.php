<!DOCTYPE html>
    <head>
        <title>
            Menguji Koneksi Database - Perulangan While
        </title>
    </head>
    <table>
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

            while ($baris_db = mysqli_fetch_row($panggil_db))
            {
                echo "<tr><th>$baris_db[0]</th><th>$baris_db[1]</th><th>$baris_db[2]</th></tr>";
            }
            ?>
        </table>
    </body>
</html>

<!--- CATATAN 
    Dengan Membuat terlebih dahulu database db_sorak untuk contoh 
    Cara menjalankan Localhost/PHP-HTML/namafile.php
    Rumus memanggil database
            $koneksi = mysqli_connect('localhost','root','root123','nama_db');
    Rumus memanggil data dari tabel
            $panggil_db = mysqli_query($koneksi,"SELECT * FROM namatabel");
    PHP Menyediakan perulangan *while* untuk membantu menampilkan data dari sebuah tabel berapapun jumlahnya.
    Rumus perulangan while 
        while ($baris_db = mysqli_fetch_row($panggil_db)) Sebelumnya dibuat terlebih dahulu struktur table dan databasenya
        -->
