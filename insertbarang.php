<?php
session_start();
require_once("conection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="database.css">
   <script src="font-awesome-kit.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>menu</h2>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fas fa-users"></i> Users </a> </li>   

                <div class="product">
                    <li><a href="#"><i class="fas fa-shopping-bag"></i> Products &nbsp &nbsp &nbsp<i class="fas fa-sort-down"></i></a></li>  
                        <ul>    
                            <li><a  class="down" href="#"><i class="fas fa-wine-bottle"></i>&nbsp botol plastik pet </a> </li>   
                            <li><a  class="down" href="#"><i class="fas fa-prescription-bottle"></i>&nbsp toples plastik pet </a> </li>  
                            <li><a  class="down" href="#"><i class="fas fa-prescription-bottle"></i>&nbsp galon </a> </li>  
                            <li><a  class="down" href="#"><i class="fas fa-clipboard"></i>&nbsp standing pouch </a> </li>  
                            <li><a  class="down" href="#"><i class="fas fa-wine-bottle"></i>&nbsp botol minyak </a> </li>  
                            <li><a  class="down" href="#"><i class="fas fa-paint-brush"></i>&nbsp sablon </a> </li>  
                            <li><a  class="down" href="#"><i class="fas fa-archive"></i>&nbsp kotak makan </a> </li>  
                            <li><a  class="down" href="#"><i class="fas fa-glass-whiskey"></i>&nbsp gelas plastik </a> </li>  
                            <li><a  class="down" href="#"><i class="fas fa-grip-lines-vertical"></i>&nbsp sedotan  </a> </li>  

                        </ul>
                </div>          
                <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                <li ><a href="#"><i class="fas fa-sign-out-alt"> Log out</i></a></li>
            
            
            </ul>
        </div>
        <div class="main">
                 <div class="main-barang" ><img src="logobotol.png" alt=""> </div>   
                
                 <div class="barang"> 
                    <h1>Tambah Barang Baru</h1> <br> <br>
                    <form action="insert.php" method="POST" enctype="multipart/form-data"> 
                        Nama:<input type="text" name="nama" id="" ><br> <br>
                        Harga:<input type="text" name="harga" id="" > <br> <br>
                        Category: <select id="category" name="cat">
                       
                       <?php

$insert= mysqli_query($conn,"select * from category ");  
echo mysqli_error($conn);
while ($row=mysqli_fetch_array($insert)) 
{    
	?>
                                   <option value="<?=$row["id_category"]?>"><?=$row["nama_category"]?></option>
<?php } ?>
                                    </select> <br> <br>

                    Deskripsi: <textarea name="desc" id="" cols="30" rows="10"></textarea><br> <br>
                    Stok: <input type="number" name="stok" id=""><br> <br>
                    Pilih gambar: <br> <br>

                    <input type="file" name="image[]" multiple="multiple" id="">
<br> <br>
                        <input type="submit" value="Insert" name="insert" class="insert">

                    </form>
                </div>
                
   
        </div>     
            
</body>
</html>