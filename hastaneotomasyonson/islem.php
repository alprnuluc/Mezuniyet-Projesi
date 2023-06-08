<?php 

ob_start();
session_start();
include 'baglan.php';

if(isset($_POST['kullanicikaydet'])){
    $kullanici_tc=isset($_POST['kullanici_tc']) ? $_POST['kullanici_tc']: null;
    $kullanici_adsoyad=isset($_POST['kullanici_adsoyad']) ? $_POST['kullanici_adsoyad']: null ;
    $kullanici_sifre=isset($_POST['kullanici_sifre']) ? $_POST['kullanici_sifre']: null;

    $sorgu=$db->prepare('INSERT INTO kullanici SET
    kullanici_tc = ?,
    kullanici_adsoyad= ?,
    kullanici_sifre= ?');

    $ekle=$sorgu->execute([
        $kullanici_tc, $kullanici_adsoyad, $kullanici_sifre]);
    if($ekle){
        header('location:index.php?durum=basarili');
    }else{
        $hata=$sorgu->errorInfo();
        echo'mysql hatası' .$hata[2];
    }
    
}

if(isset($_POST['girisyap'])){
    $kullanici_tc=$_POST['kullanici_tc'];
    $kullanici_sifre=$_POST['kullanici_sifre'];

    $kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc and kullanici_sifre=:kullanici_sifre ");
    $kullanicisor->execute([
        'kullanici_tc' => $kullanici_tc,
        'kullanici_sifre' => $kullanici_sifre
    ]);

    $say=$kullanicisor ->rowCount();
    if($say==1){
        $_SESSION['userkullanici_tc']=$kullanici_tc;
        header('location:anasayfa.php?durum=girisbasarili');
        exit;

    }else{
        header('location:index.php?durum=girisbasarisiz');
        exit;

    }


        
    


}

if(isset($_POST['randevukaydet'])) {
    $randevu_sehir = isset($_POST['sehir']) ? $_POST['sehir'] : null;
    $randevu_hastane = isset($_POST['hastane']) ? $_POST['hastane'] : null;
    $randevu_doktor = isset($_POST['doktor']) ? $_POST['doktor'] : null;
    $randevu_tarih = isset($_POST['tarih']) ? $_POST['tarih'] : null;
    $randevu_klinik = isset($_POST['klinik']) ? $_POST['klinik'] : null;
    $hasta_id = isset($_POST['kullanici_id']) ? $_POST['kullanici_id'] : null;

    $kaydet=$db->prepare("INSERT INTO randevu SET 
    randevu_sehir = ?,
    randevu_hastane = ?,
    randevu_doktor = ?,
    randevu_tarih = ?,
    randevu_klinik = ?,
    randevu_hasta_id = ?
 ");

 $insert=$kaydet->execute([
    $randevu_sehir,$randevu_hastane,$randevu_doktor,$randevu_tarih,$randevu_klinik,$hasta_id
 ]);

 if($insert){
    header("location:anasayfa.php?kayitbasarili");
    
 }else{
    header("location:anasayfa.php?kayibasarisiz");
 }




}







?>