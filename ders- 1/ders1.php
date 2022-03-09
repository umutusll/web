<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset= "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <title>Php Ders-1</title>
    </head>

<body>
    <!--Html yorum satırı -->

    <?php 
    /*Açıklama Satırı Bloğu
      (Çoklu satır kullanılabilir) Kısayol: Shift + Alt + a
      */

      //Tek satır açıklama için kullanılır.
      
      /*Kullanılan Komtu:
           echo:Ekrana yazdırma işlemi yapar.
               Komut içerisinde html etiketleri kullanılabilir.
               Çift veya tek tırnak kullanılabilir.
               Çift tırnak ile kullanıldığında içerisindeki değişkenlerin içeriklerini ekrana yazar.
               Nokta(.) operatorü ile birleştirme işlemi yapılabilir.
               Ters slash (\) kaçış karakteridir. Özel ifadelerden önce kullanılır.

       */    
       echo "<h3>Adnan Menderes Üniversitesi</h3>";
       echo "<h4> Aydın Meslek Yüksekokulu</h4>";
       echo "<h4> Aydın Meslek Yüksekokulu</h4>";
       
       echo "Bilgisayar Mühendisliği   "  .  'Aymes';
       echo "<br>Bilgisayar Mühendisliği" ."<br>" . 'Aymes';

       echo "<hr> <h4> Değişken Tanımlama </h4>";
       echo "<ol>   
               <li>Değişken isimleri $ ile başlar. </li>
               <li>Değişken isimleri sayısal ifadelerle başlayamaz. </li>
               <li>Değişken isimlerinde boşluk kullanılmaz. birden fazla kelime varsa birinci_sinif veya birinciSinif kullanılabilir </li>
               <li>Değişken isimlerinde küçük büyük harfe duyarlıdır. \$Sayi != \$Sayi </li>
               <li>Değişken ismi , değişkenin taşıdığı değeri ifade etmeli örnek no yerine ogrenciNo veya telefonNo yazılabilir </li>
               <li>(Php özel) Değişken içeriğinde metinsel ifade varsa çift tırnak (\") veya tek tırnak (') kullanılabilir. </li>
               <li>Değişken içeriğinde sayısal bir ifade varsa tırnak kullanmak gerekli değildir. </li>
               <li>Değişken içerikleri ekrana echo komutu ile yazdırılabilir. </li>
        </ol>";

     echo "<hr> <h4> Değişken Tanımlama Örnekleri </h4>";
     $isim    = "Ahmet";
     $soyisim = "Erimez";
     $gsm     = "123123123";

     echo $isim."<br>";
     echo "$isim $soyisim $gsm";

     /* Uygulama:
         Üniversite-myo-ad-soyad-numara değişkenlerini tanımlayınız.
         Bu değişkenlerin içeriklerini tablo veya form içeriğinde ekrana yazdırınız.
     */
    $uni     = "Adü";
     $myo    = "Aymes";
    $ad      = "Umut";
    $soyad   = "Özdemir";
    $numara  = "216029043";
    ?>

    <form action=" ">
        <label for="universite">Üni: </label>
         <input type = "text" name="" value="<?php echo $uni; ?>" id="universite" disabled><br>

         <label for="myo">Myo: </label>
         <input type = "text" name="" value="<?php echo $myo; ?>" id="myo" disabled><br>

         <label for="ad">Ad: </label>
         <input type = "text" name="" value="<?php echo $ad; ?>" id="ad" disabled><br>

         <label for="soyad">Soyad: </label>
         <input type = "text" name="" value="<?php echo $soyad; ?>" id="soyad" disabled><br>

         <label for="numara">Öğrenci No: </label>
         <input type = "text" name="" value="<?php echo $numara; ?>" id="numara" disabled><br>
    </form>
</body>
</html>