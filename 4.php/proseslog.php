<?php
session_start(); // Start session nya
include "koneksi.php";
$email = $_POST['email'];
$password = $_POST['password']; 


$sql = $pdo->prepare("SELECT * FROM auto WHERE email=:a AND password=:b");
$sql->bindParam(':a', $email);
$sql->bindParam(':b', $password);
$sql->execute(); 
$data = $sql->fetch(); 
if( ! empty($data)){ 
  $_SESSION['id'] = $data['id'];   
  $_SESSION['name'] = $data['name'];   
  $_SESSION['email'] = $data['email']; 
  $_SESSION['password'] = $data['password']; 
  
  setcookie("message","delete",time()-1);
  
  header("location: index.php"); 
}else{ 
 
  setcookie("message", "Maaf, Email atau Password salah", time()+3600);
  
  header("location: login.php"); 
}
?>