<?php 
include 'header.php';
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hastane Randevu Otomasyon Sistemi</title>
</head>
<body>
    <div class="hesapcontent">
        <div class="label">
            <label>Adınız Soyadınız</label>
            <input type="text" placeholder="<?php echo $kullanicicek['kullanici_adsoyad']; ?>">

        </div> <br>
        
        <div class="label">
            <label>TC Kimlik Numarınız</label>
            <input type="text" placeholder="<?php echo $kullanicicek['kullanici_tc']; ?>">

        </div> <br>
       
        
        
    </div>

    


    
</body>
</html>