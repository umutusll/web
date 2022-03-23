<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

/* Uygulama: rastgele üretilen sayının
50'den büyükse
   Geçtiniz-Notunuz: xx
50'den Küçükse
   Kaldınız-Notunuz: xx
   uygulamasını gerçekleştiriniz.
   */

$not = rand(10, 100);
if ($not >= 50) {
      echo "Geçtiniz-Notunuz:$not";
} else {
    echo"Kaldınız-Notunuz:$not";
} 


echo "<h3>Sık Kullanılan String Fonksiyonları</h3>";

$yazi = "Aydın adnan menderes üniversitesi";
echo gettype($yazi);
echo "<br> Değişken içeriği: $yazi" ."(". gettype($yazi) .")";

//içeriğin büyük harfe dönüştürülmesi

echo "<br> \$yazi içeriğinin büyük harfle yazılması: " . strtoupper($yazi);

echo "<br> \$yazi içeriğinin büyük harfle yazılması: " . mb_strtoupper($yazi);

"<br>";
//içeriğin küçük harfle yazılması //

echo "<br> \$yazi içeriğinin küçük harfle yazılması : " . mb_strtolower($yazi);

//içeriğin ilk harfini büyük harfle yazılması //

echo "<br> \$yazi içeriğinin ilk harfinin büyük harfle yazılması : " . ucfirst($yazi);

//içeriğin tüm kelimelerinin ilk harfini büyük harfle yazılması //
 echo "<br> \$yazi içeriğinin tüm kelimelerinin ilk harfini büyük harfle yazılması : " . ucwords($yazi);
  
// içeriğinin harf sayısı : 
echo "<br> \$yazi içeriğindeki harf sayısı :" . strlen($yazi);

//ascii char karşılığı 
echo  "<br>Karakter Karşılığı "  . chr(109);
echo  "<br>Karakter Karşılığı " .chr(64);

//Uygulama 32-127 char karşılıkları :
echo "<br>Ascii Karakterleri : ";
for ($i = 32; $i <= 127; $i++) {
    echo   chr($i)  .  "-"  ;
}


//Metnin parçalanarak diziye dönüştürülmesi:
$dizi=explode(" ",$yazi);
echo "<br>";
print_r($dizi);  

//Uygulama Paragraftaki Kelime ve Cümle Sayılarını alt alta yazdırınız:
$metin="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas recusandae reprehenderit ut obcaecati amet. Quisquam eius exercitationem,
 temporibus reprehenderit nam veritatis aut alias nostrum possimus. Nam, hic iste. Corrupti, numquam!";

 $kelimelerDizisi = explode(" ",$metin);
 $cumlelerDizisi = explode (".",$metin);

 echo "<br>Kelime Sayısı : " .count($kelimelerDizisi);
 echo "<br>Cümle Sayısı : " .count($cumlelerDizisi);

 /*Uygulama
     Veri tabanından gelen 2021-12-25 değerini 25-12-2021 şeklinde ekrana yazdırınız.
 */
echo "<br>";
 $tarih = "2021-12-25";
 $yenitarih = explode("-", $tarih);
 echo $yenitarih[2] . "-" . $yenitarih[1] . "-" . $yenitarih[0];

 //Dizinin metne dönüştürülmesi  (implode)
 echo "<br>";
 $aylar =["Ocak","Şubat","Mart","Nisan","Mayıs"];
 print_r($aylar);
 $aylarString = implode(" ",$aylar);

 echo "<br>String: $aylarString";

 /*
 str_split():
 Verilen bir metnin belirten sayı kadar ayrılarak bir dizi içeriğine aktarılması .
 Eğer sayı belirtilmezse metni harf harf böler.
 */

 $iban="TR0010002000300040005000";

 $ibanYeni=str_split($iban,4);
 echo "<br>";
 print_r($ibanYeni);
 echo "<br>";

 //foreach döngüsü ile yazdırma foreach yazınca 3.yü seç 
 foreach ($ibanyeni as $parca) {
     echo "$parca" ;
 }

 /* Trim Substr str_replace mdS -sha1 * /
  


?>
</body>
</html>