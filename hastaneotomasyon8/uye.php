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
    <header>
        <h2>Hastane Otomasyon</h2>
    </header>
    <div class="table">
        <h1>Kayıt Olmak İçin</h1>
        <form action="islem.php" method="post">
            <div class="user" >
                <input type="text" name="adsoyad" placeholder="Adınızı ve Soyadınızı Giriniz">
            </div>
            <div class="user" >
                <input type="text" name="tc" placeholder="TC Kimlik Numarınızı Giriniz">
            </div>
            <div class="pass">
                <input type="password" name="password" placeholder="Şifrenizi Giriniz">
            </div>
            <button type="submit" class="sub" id="giris">Kayıt Ol</button>
            <hr width="418" align=center>
        </form>
        <a href="index.php"><button type="submit" class="sub" id="kayit">Geri Dön</button></a>
    </div>

    
</body>
</html>