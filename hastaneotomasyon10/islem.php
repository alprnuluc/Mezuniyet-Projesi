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







?>