<?php 
include'header.php';

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hastane Randevu Otomasyon Sistemi</title>
</head>
<body>

<div class="adsoyad">
    <h4>Sayın: <?php echo $kullanicicek ['kullanici_adsoyad']; ?></h4>
</div>

<div class="ortadiv" id="randevudiv">

<form action="islem.php" method="post">
    <input type="date" name="tarih">

    <select name="sehir" class="sehir">
    <option value="İl Seçin">İl Seçin</option>
    <option value="Ankara">Ankara</option>
    
    </select>

    <select name="hastane" class="hastane">
        <option value="hastane">Hastane Seçin</option>
        <option value="Ankara Atatürk Sanatoryum Eğitim ve Araştırma Hastanesi">Ankara Atatürk Sanatoryum Eğitim ve Araştırma Hastanesi</option>
        <option value="Ankara Eğitim ve Araştırma Hastanesi">Ankara Eğitim ve Araştırma Hastanesi</option>
        <option value="Ankara Etlik Şehir Hastanesi">Ankara Etlik Şehir Hastanesi</option>
        <option value="Ankara Şehir Hastanesi">Ankara Şehir Hastanesi</option>
        <option value="Gülhane Eğitim ve Araştırma Hastanesi">Gülhane Eğitim ve Araştırma Hastanesi</option>
        <option value="Ankara Üniversitesi Cebeci Araştırma ve Uygulama Hastanesi">Ankara Üniversitesi Cebeci Araştırma ve Uygulama Hastanesi</option>
        <option value="Ankara Üniversitesi İbni Sina Araştırma ve Uygulama Hastanesi">Ankara Üniversitesi İbni Sina Araştırma ve Uygulama Hastanesi</option>
        <option value="Başkent Üniversitesi Ankara Hastanesi">Başkent Üniversitesi Ankara Hastanesi</option>
        <option value="Hacettepe Üniversitesi Beytepe Gün Hastanesi">Hacettepe Üniversitesi Beytepe Gün Hastanesi</option>
        <option value="Hacettepe Üniversitesi Erişkin Hastanesi">Hacettepe Üniversitesi Erişkin Hastanesi</option>
        <option value="Hacettepe Üniversitesi İhsan Doğramacı Çocuk Hastanesi">Hacettepe Üniversitesi İhsan Doğramacı Çocuk Hastanesi</option>
        <option value="Hacettepe Üniversitesi Onkoloji Hastanesi">Hacettepe Üniversitesi Onkoloji Hastanesi</option>
        


    </select>

    <select name="klinik" class="klinik">
        <option value="klinik">Klinik Seçin</option>
        <option value="BESLENME VE DİYET">BESLENME VE DİYET</option>
        <option value="ÇOCUK SAĞLIĞI VE HASTALIKLARI">ÇOCUK SAĞLIĞI VE HASTALIKLARI</option>
        <option value="ÇOCUK PSİKİYATRİSİ">ÇOCUK PSİKİYATRİSİ</option>
        <option value="DERMATOLOJİ (CİLDİYE)">DERMATOLOJİ (CİLDİYE)</option>
        <option value="ENDOKRİNOLOJİ VE METABOLİZMA">ENDOKRİNOLOJİ VE METABOLİZMA</option>
        <option value="ENFEKSİYON HASTALIKLARI">ENFEKSİYON HASTALIKLARI</option>
        <option value="FİZİKSEL TIP VE REHABİLİTASYON">FİZİKSEL TIP VE REHABİLİTASYON</option>
        <option value="GÖĞÜS HASTALIKLARI">GÖĞÜS HASTALIKLARI</option>
        <option value="GÖZ HASTALIKLARI">GÖZ HASTALIKLARI</option>
        <option value="İÇ HASTALIKLARI">İÇ HASTALIKLARI</option>
        <option value="KADIN HASTALIKLARI VE DOĞUM">KADIN HASTALIKLARI VE DOĞUM</option>
        <option value="KARDİYOLOJİ">KARDİYOLOJİ</option>
        <option value="KULAK-BURUN-BOĞAZ HASTALIKLARI">KULAK-BURUN-BOĞAZ HASTALIKLARI</option>
        <option value="NÖROLOJİ">NÖROLOJİ</option>
        <option value="PSİKİYATRİ">PSİKİYATRİ</option>
        <option value="RADYASYON ONKOLOJİSİ">RADYASYON ONKOLOJİSİ</option>
        <option value="ÜROLOJİ">ÜROLOJİ</option>
        

        


    </select>

    <select name="doktor" class="doktor">
        <option value="doktor">Doktor Seçin</option>
        <option value="Beslenme ve Diyet Uzmanı Elif Kaya">Beslenme ve Diyet Uzmanı Elif Kaya</option>
        <option value="Çocuk Sağlığı ve Hastalıkları Uzmanı Ahmet Çelik">Çocuk Sağlığı ve Hastalıkları Uzmanı Ahmet Çelik</option>
        <option value="Çocuk Psikaytrisi Uzmanı Selma Türk">Çocuk Psikaytrisi Uzmanı Selma Türk</option>
        <option value="Dermatoloji Uzmanı İrem Köse">Dermatoloji Uzmanı İrem Köse</option>
        <option value="Endokrinoloji ve Metabolizma Uzmanı Osman Taş">Endokrinoloji ve Metabolizma Uzmanı Osman Taş</option>
        <option value="Enfeksiyon Hastalıkları Uzmanı Selim Sönmez">Enfeksiyon Hastalıkları Uzmanı Selim Sönmez</option>
        <option value="Fiziksel Tıp ve Rehabilitasyon Uzmanı Ali Sert">Fiziksel Tıp ve Rehabilitasyon Uzmanı Ali Sert</option>
        <option value="Göğüs Hastalıkları Uzmanı Derya Çimen">Göğüs Hastalıkları Uzmanı Derya Çimen</option>
        <option value="Göz Hastalıkları Uzmanı Hatice Dönmez">Göz Hastalıkları Uzmanı Hatice Dönmez</option>
        <option value="İç Hastalıkları Uzmanı Mehtap Ateş">İç Hastalıkları Uzmanı Mehtap Ateş</option>
        <option value="Kadın Hastalıkları ve Doğum Uzmanı Nagihan Alçı">Kadın Hastalıkları ve Doğum Uzmanı Nagihan Alçı</option>
        <option value="Kardiyoloji Uzmanı Murat Dağ">Kardiyoloji Uzmanı Murat Dağ</option>
        <option value="Kulak-Burun-Boğaz Hastalıkları Uzmanı Samet Çetin ">Kulak-Burun-Boğaz Hastalıkları Uzmanı Samet Çetin</option>
        <option value="Nöroloji Uzmanı Kardelen Ceylan">Nöroloji Uzmanı Kardelen Ceylan</option>
        <option value="Psikiyatri Uzmanı Gül Hacıoğulları">Psikiyatri Uzmanı Gül Hacıoğulları</option>
        <option value="Radyasyon Onkolojisi Uzmanı Abdullah Yaş">Radyasyon Onkolojisi Uzmanı Abdullah Yaş</option>
        <option value="Üroloji Uzmanı Muzaffer Fidan">Üroloji Uzmanı Muzaffer Fidan</option>
        

        


    </select>
    <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ;?>">

    <button name="randevukaydet">Randevuyu Kaydet</button>

    </form>

    
    

</div>

<div class="ortadiv" id="sagdiv">
    <h3>T.C Sağlık Bakanlığı</h3>
    <p>Geçmiş Olsun Dileklerimizi İletir.Sağlıcaklı Günler Dileriz...</p>
    
        
    

</div>



    
</body>
</html>