<?php
include'koneksi.php';
session_start();

if($_POST['login']){
    $usr=addslashes($_POST['username']);
    $psw=md5(addslashes($_POST['psw']));
    $q=mysqli_query($koneksi,"select * from tb_login where username='$usr' and password='$psw' ");
    $cek=mysqli_fetch_array($q);
    $cari=mysqli_num_rows($q);
    
    if(mysqli_num_rows($q)== 1){
        $_SESSION['userid'] = $cek['id_login'];
        $_SESSION['level'] = $cek['level'];
        if($cek['level']=="admin"){
            header("Location:admin/index.php");
            }
        else if($cek['level']=="bilik"){
            header("Location:indexvot.php");
            }
        else{
            die("Salah");
        }
        }
    
    }
?>
