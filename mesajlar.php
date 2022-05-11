<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>mesajlar</title>
  </head>
  <body>
 

    <?php 


$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "webphp";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}

$sql="SELECT * FROM iletisim";
$sorgu=mysqli_query($conn,$sql);

?>

<div class="container">
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Adı</th>
      <th scope="col">Soyadı</th>
      <th scope="col">Mail</th>
      <th scope="col">Konu</th>
      <th scope="col">Mesaj</th>
    </tr>
  </thead>

<?php 

while( $sonuc=mysqli_fetch_row($sorgu) ){
    ?>

   
<tbody>
    <tr>
      <th scope="row"><?php echo $sonuc[0];  ?></th>
      <td><?php echo $sonuc[1];  ?></td>
      <td><?php echo $sonuc[2];  ?></td>
      <td><?php echo $sonuc[3];  ?></td>
      <td><?php echo $sonuc[4];  ?></td>
      <td><?php echo $sonuc[5];  ?></td>
    </tr>
    
  </tbody>
    <?php 
}
?>

 
</table>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>


