<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset= "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <title>Php Ders-1</title>
    </head>

    <?php
   $ad="Umut";
   $soyad=" Özdemir";
   $numara=543216029043;
   $universite=" Aydın Adnan Menderes Üniversitesi";
   $bolum="Bilgisayar Programcılığı";
     ?>

<table>

<?php
echo "<table align=center>";
echo "<table border='12'>";
echo "<tr>";
echo "<th>Ad,Soyad</th>";
echo "<th>$ad$soyad</th>";
echo "</tr>";
echo "<tr>";
echo "<th>Telefon Numarasi</th>";
echo "<th>$numara</th>";
echo "</tr>";
echo "<th>Universite</th>";
echo "<th>$universite</th>";
echo "</tr>";
echo "<tr>";
echo "<th>Bölümüm</th>";
echo "<th>$bolum</th>";
echo "</tr>";
echo "</table>";
?>
</body>
</html>