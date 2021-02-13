<?php
session_start(); 
if( ! isset($_SESSION['id'])){
  header("location: login.php"); 
}
?>

<html>
<head>
  <title>DUMBWAYS</title>
</head>
<body>
  <h1>Data Base</h1>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  <table border=1 width="100%">
  <tr>
    <th>Title</th>
    <th>Content</th>
    <th>Image</th>
    <th>Created at</th>
    <th>Category</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
     include "koneksi.php";
     $id=$_SESSION["id"];
     $name=$_SESSION["name"];
     $sql = $pdo->prepare("SELECT * FROM article where id_user='".$id."'");
     $sql->execute(); // Eksekusi querynya
     while($data = $sql->fetch()){ 
        echo "<tr>";
        echo "<td>".$data['title']."</td>";
        echo "<td>".$data['content']."</td>";
        echo "<td>".$data['image']."</td>";
        echo "<td>".$data['created_at']."</td>";
        echo "<td>".$data['id_category']."</td>";
        echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
        echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
        echo "</tr>";
     }
  ?>
  </table>
  <p>Username : <?php echo $name; ?></p>
  <a href="logout.php">Logout</a>
</body>
</html>