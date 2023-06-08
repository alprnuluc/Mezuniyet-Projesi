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
    <h4>Sayın:</h4>
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

    <button name="randevukaydet">Randevuyu Kaydet</button>

    </form>

    
    

</div>

<div class="ortadiv" id="sagdiv">
    <h3>T.C Sağlık Bakanlığı</h3>
    <p>Geçmiş Olsun Dileklerimizi İletir.Sağlıcaklı Günler Dileriz...</p>
    
        
    

</div>



    
</body>
</html>