<?php 
session_start();
ob_start();
if(empty($_SESSION['oturum'])){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kütüphane Kayıt&Yönetim Scripti</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="style/giris-style.css">
</head>
<body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
        <div class="dropdown" id="div1">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
              MENU
            </button>
            <div id="dropdown-1" class="dropdown-menu">
              <a class="dropdown-item active" href="index.php">Anasayfa</a>
              <a class="dropdown-item active" href="kitaplar.php">Kitaplar</a>
              <a class="dropdown-item active" href="guncelle.php">Güncelle</a>
              <a class="dropdown-item active" href="hakkimda.php">Hakkımda</a> 
              <a class="dropdown-item active" href="giris.php">Giriş</a><a class="dropdown-item active" href="cikis.php">Çıkış</a></li>

            </div>
        </div>
        <header style="font-size: 33px; color: rgb(50, 106, 151); font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;" align="center"><font>Kütüphane Kayıt&Yönetim Scripti - Giriş Sayfası</font></header>
    
    
    <div class="container col-md-4" id="kayit-div">

            <form action="giris-icin.php" method="post">
                
                <div class="form-group">
                    <label for="inputText">Kullanıcı adı</label>
                    <input name="name" type="text" class="form-control" id="inputText" placeholder="Bir kullanıcı adı seçin...">
                </div>
                
                <div class="form-group">
                    <label for="inputPassword">Şifre</label>
                    <input name="pass" type="password" class="form-control" id="inputPassword" placeholder="Bir şifre seçin...">
                </div>
                
               
                
                <button name="giris_yap" type="submit" class="btn btn-primary">Gönder</button>
                <button id="button1" name="yonlendir" type="submit" class="btn btn-default"><a href="kayit.html">Hesabınız yok mu? Kayıt ol</a></button>

            </form>
            
    </div>
</body>
</html>
<?php }else{

require "uyari1.html"; 
$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
header("Refresh: 3; url=$url");

}?>
