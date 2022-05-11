


<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Personal Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      #iletisimarticle{
        margin-top: 100px;
      }
  </style>

</head>
<body>
    <div class="container-fluid p-0 text-white text-center" id="header">
    </div>
    <nav class="navbar navbar-dark navbar-expand-lg text-white" id="navbar">
        <div class="container">
            <a href="index.html" class="navbar-brand text-black" id="anasayfalogo">Anasayfa</a>
            <button type="button" class="navbar-toggler" id="mobilnavbar" data-bs-toggle="collapse" data-bs-target="#navbar-anasayfa" aria-controls="navbar-anasayfa">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-anasayfa">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item pl-5" style="padding:  0px 35px 0px">
                        <a href="ozgecmisim.html" class="nav-link text-white">Özgeçmişim</a>
                    </li>
                    <li class="nav-item" style="padding:  0px 35px" >
                        <a href="sehrim.html" class="nav-link text-white">Şehrim</a>
                    </li>
                    <li class="nav-item" style="padding:  0px 35px">
                        <a href="takimimiz.html" class="nav-link text-white">Takımımız</a>
                    </li>
                    <li class="nav-item" style="padding:  0px 35px">
                        <a href="ilgialanlarim.html" class="nav-link text-white">İlgi Alanlarım</a>
                    </li>
                    <li class="nav-item" style="padding:  0px 0px 0px 35px">
                        <a href="iletisim.html" class="nav-link text-white">İletişim</a>
                    </li>
                </ul>
                <form class="d-flex"></form>
                <a href="login.php"><button class="btn btn-outline-light" type="submit">Giriş</button></a>
            </div>
        </div>

    </nav>
    <article>
        <br>
        <br>
        <div class='container' style="margin-top: 50px;">
            <div class='row'>
                <div class='col-sm-10 col-sm-offset-1 col-xs-12' >
                    <div class='well'>
                        <form id="form" action="iletisim.php" method="post">
                            <div class='row'>
                                <div class='col-sm-4'>
                                    <div class='form-group'>
                                        <label for='fname'>Adınız</label>
                                        <input type='text' name="Adi" class='form-control' />
                                    </div>
                                    <div class='form-group'>
                                        <label for='lname'>Soyadınız</label>
                                        <input type='text' name="Soyadi" class='form-control' />
                                    </div>
                                    <div class='form-group'>
                                        <label for='email'>Mailiniz</label>
                                        <input type='text'  name="Mail"  class='form-control' />
                                    </div>
                                    <div class='form-group'>
                                        <label for='konu'>Konu</label>
                                        <input type='text'  name="Konu"  class='form-control' />

                                    </div>
                                </div>
                                <div class='col-sm-7'>
                                    <div class='form-group'>
                                        <label for='message'>Mesajınız</label>
                                        <textarea class='form-control' name="Mesaj" rows='10'></textarea>
                                    </div>
                                    <div class='text-right' style="margin-top: 20px; float:right;">
                                        <input type='submit' class='btn btn-primary' value='Gönder'/>
                                        <input type='reset' class='btn btn-primary' value='Temizle'/>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </article>
</body>
</html>


<?php 

include "db_conn.php";




$adi = $_POST['Adi'];
$soyadi =$_POST['Soyadi'];
$mail = $_POST['Mail'];
$konu = $_POST['Konu'];
$mesaj = $_POST['Mesaj'];


$sql = "INSERT INTO iletisim (adi, soyadi, mail, konu, mesaj)
VALUES ('$adi', '$soyadi', '$mail', '$konu', '$mesaj' )";

if (mysqli_query($conn, $sql)) {
  echo "Mesaj Gönderildi";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}