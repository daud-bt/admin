<?php
session_start();
require_once("conection.php");

if(isset($_GET["id"])){
    $id = $_GET["id"];
  
    $sql="delete from barang where id_barang=$id";
    $sqli="delete from gambarlebih where id_barang=$id";  
    mysqli_query($conn,$sql);
    if(mysqli_error($conn)){
        die(mysqli_error($conn));
    }
    mysqli_query($conn,$sqli);
    if(mysqli_error($conn)){
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
   <script src="font-awesome-kit.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
        <h2>menu</h2>
        <ul>
           <li><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
           <li><a href="user.php"><i class="fas fa-users"></i> Users </a> </li>   

           <div class="product">
            <li><a href="logo.php"><i class="fas fa-shopping-bag"></i> Logo &nbsp &nbsp &nbsp</a></li>  
              
                     
           </div>                
                 
         <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
           <li ><a href="login.php"><i class="fas fa-sign-out-alt"> Log out</i></a></li>
         
         
        </ul>
        </div>
            <div class="main-content">
                <div class="foto" ><img src="logobotol.png" ></div>              
                <div class="info">  
                   
                </div>
                
                <div class="tabelbarang" >
                <div style="text-align:right">
                     <form action="insertbarang.php"><button style="border-radius:5px; margin-right:10px; width:150px; " >Tambah botol baru</button> </form> 
                </div>  
                <?php

$insert= mysqli_query($conn,"select g.nama_file, b.nama,b.id_barang,b.harga,b.stok,b.deskripsi,b.category from barang b,gambarlebih g where b.id_gambar_cover=g.id_gambar ");  
echo mysqli_error($conn);
while ($row=mysqli_fetch_array($insert)) 
{    
	?>
                        <div style="float:left; width:30%;height:300px; margin:1%"> 
                        <img src="<?=$row["nama_file"]?>" width="100%" height="150px"> 
                        <h4 style="text-align:left"><?=$row["nama"]?> <br> harga Rp.<?=$row["harga"]?>
                         <br> <?=$row["deskripsi"]?> 
                         <br> category:<?=$row["category"]?></h4> 
                         <a href="editform.php?id=<?=$row["id_barang"]?>">  <button id="btnedit">Edit </button></a>
                         <a href="admin.php?id=<?=$row["id_barang"]?>">   <button id="btndelete">Delete</button> </a> </div> 
                        
                        <?php } ?>  
               </div>
            </div>
            
    </div>
</body>
</html>