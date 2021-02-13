<?php
session_start();
if(isset($_SESSION['id'])){ 
  header("location: index.php"); 
}
?>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h1>Silahkan login terlebih dahulu...</h1>
  
  <div style="color: red;margin-bottom: 15px;">
    <?php
    if(isset($_COOKIE["message"])){ 
      echo $_COOKIE["message"]; 
    }
    ?>
  </div>
  
  <form method="post" action="proseslog.php">
    <label>Email</label><br>
    <input type="text" name="email" placeholder="Email"><br><br>
    
    <label>Password</label><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    
    <button type="submit">Login</button>
  </form>
</body>
</html>