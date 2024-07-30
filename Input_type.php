<!DOCTYPE html>
<html>
    <head>
        <title>
            HTML Pertamaku
       </title>
    </head>
    <body>
        <h2>Data Diri Anda Sebagai Berikut</h2><br/><br/>

        <?php
        echo "<p>Nama Anda :</p>", $_GET['namasaya'];
        echo "<br/>";
        echo "<p>E-mail :</p>", $_GET["email"];
        echo "<br/>";
        echo "<p>Isi Komentar :</p>", $_GET["komentar"];
        echo "<br/><br/>";
        echo "<p>Buah-Buahan Kesukaan Anda :</p>";
        echo "<br/>";
        echo "<p>Buah-Buahan</p>",$_GET['buah'];
        echo "<br/>";
        echo "<p>Suka diolah sebagai :</p>", $_GET['olahan'];
        echo "<br/><br/>";
        ?>
    </body>
</html>