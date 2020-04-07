<?php
require_once("conection.php");

if(isset($_POST["btnsubmit"])){
    
    $hidden = $_POST["id"];
    $nama = $_POST['upnama'];
    $harga = $_POST['upharga'];
    $desc = $_POST['updesc'];
   
    $category=$_POST['cat'];
    $gambar=$_FILES['upimage']['name'];
    $tmpgambar1=$_FILES['upimage']['tmp_name'];
    
    if($category==1) $category="botol plastik pet";   
    else if($category==2) $category="galon";
    else if($category==3) $category="standing pouch";
    else if($category==4) $category="botol minyak";
    else if($category==5) $category="sablon dan stiker";
    else if($category==6) $category="kotak makan";
    else if($category==7) $category="gelas plastik";
    else if($category==8) $category="sedotan";
  
    if(isset($gambar))
    {
       
        if(!empty($gambar))
        {  $location="botol/".basename($gambar);
            if(move_uploaded_file($tmpgambar1,$location))
            {
                $sql = "update barang set nama='$nama' , harga=$harga , deskripsi='$desc',category='$category' where id_barang=$hidden";
                $sqli = "update gambarlebih set nama_file='$location' where id_barang=$hidden";
        
                mysqli_query($conn,$sql);
                if(mysqli_error($conn)){
                    die(mysqli_error($conn));
                } 
            
                mysqli_query($conn,$sqli);
                if(mysqli_error($conn)){
                    die(mysqli_error($conn));
                }
                header("location:admin.php");
            }
        }
      
    }
    if(!isset($image))
    {
        $sql = "update barang set nama='$nama', harga=$harga , deskripsi='$desc',category='$category' where id_barang=$hidden";
        mysqli_query($conn,$sql);
        if(mysqli_error($conn)){
            die(mysqli_error($conn));
        }
        header("location:admin.php");
    }
   
  
    
}

    
?>
