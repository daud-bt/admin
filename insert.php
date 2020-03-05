<?php
session_start();
require_once("conection.php");

if(isset($_POST['insert'])){

   $gambar= "botol/".basename($_FILES['image']['name']);
   $image=$_FILES['image']['name'];
   $nama=$_POST['nama'];
   $harga=$_POST['harga'];
   $stok=$_POST['stok'];
   $desc=$_POST['desc'];

   $insert= mysqli_query($conn,"insert into barang (nama,harga,stok,deskripsi) values('$nama','$harga','$stok','$desc')"); 

   if(!mysqli_error($conn)){
       header("location:insertbotol.php");
   }else{
       echo mysqli_error($conn);
   }
}