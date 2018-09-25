<!DOCTYPE html>

<?php
$angka1 = 5;
$angka2 = 10;
$hasil = $angka1*$angka2;

$keterangan = "hasil dari perkalian antara " .$angka1 . ' x ' .$angka2;
echo $keterangan . ' adalah ' .$hasil;

 ?>
<style media="screen">
  form{
    overflow: hidden;
  }

  label {
    float: left;
    width: 50px;
}

input {
    float: left;
    width: 500px;
}
#submit{
  float: left;
  width: 100px;
}

</style>
 <html>
   <head>
     <meta charset="utf-8">
     <title>perkalian</title>
   </head>
   <body>
     <form class="table" action="" method="post">
       <label for="">Nama</label>
       <input type="text" name="Name" value=""> <br><br>
       <label for="">Alamat</label>
       <input type="text" name="Alamat" value=""> <br><br>
      <input id="submit" type="submit" name="" value="submit">
     </form>
   </body>
 </html>
