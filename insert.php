<?php
session_start();
require_once("conection.php");

if(isset($_POST['insert'])){

   
   $image=$_FILES['image']['name'];
   $tmpname=$_FILES['image']['tmp_name'];

   $nama=$_POST['nama'];
   $harga=$_POST['harga'];
   $stok=$_POST['stok'];
   $desc=$_POST['desc'];
   $cat=$_POST['cat'];
print_r($_FILES);
  $insert= mysqli_query($conn,"insert into barang (nama,harga,category,stok,deskripsi) values('$nama','$harga','$cat','$stok','$desc')"); 
 
$idbarang=mysqli_insert_id($conn);
   for($i=0;$i<=count($tmpname)-1;$i++)
   {
    $gambar= "botol/".basename($image[$i]);       
       if(move_uploaded_file($tmpname[$i],$gambar))
       {
        $masuk= mysqli_query($conn,"insert into gambarlebih (nama_file,id_barang) values('$gambar','$idbarang')");
       }
       
   }

   

$idcover=mysqli_insert_id($conn);
$update= mysqli_query($conn,"update barang set id_gambar_cover=$idcover where id_barang=$idbarang"); 

   if(!mysqli_error($conn)){
       header("location:insertbotol.php");
   }else{
       echo mysqli_error($conn);
   }
}