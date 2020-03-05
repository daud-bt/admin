<?php
session_start();
require_once("conection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="database.css">
    <script src="font-awesome-kit.js" crossorigin="anonymous"></script>
    <title>edit</title>
</head>
<body>
    
    <br>
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
                    <h1>edit</h1> <br> <br>
                    <form action=""> 
                        Nama:<input type="text" name="" id="" ><br> <br>
                        Harga:<input type="text" name="" id="" > <br> <br>
                        Deskripsi:<input type="text" name="" id="" > <br> <br>
                        image: <input type="text" name="" id=""> <input type="submit" value="browse">

                    </form>
                </div>
                  
        </div> 
</body>
</html>