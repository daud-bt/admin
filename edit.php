<?php
require_once("conection.php");

if(isset($_POST["btnsubmit"])){
    $hidden = $_POST["id"];
    $nama = $_POST['upnama'];
    $harga = $_POST['upharga'];
    $desc = $_POST['updesc'];
    $image = $_POST['upimage'];
    $sql = "update barang set nama='$nama' , harga=$harga , deskripsi='$desc' where id_barang=$hidden";
    $sqli = "update gambarlebih set nama_file='$image' where id_barang=$hidden";
    mysqli_query($conn,$sql);
    if(mysqli_error($conn)){
        die(mysqli_error($conn));
    }
    // else{
        
    //     header("location:botolplastik.php");
    // }
    
    mysqli_query($conn,$sqli);
    if(mysqli_error($conn)){
        die(mysqli_error($conn));
    }
}

?>
