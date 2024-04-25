<?php
session_start();
if(!isset($_SESSION['userid'])){
header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman home</title>
</head>
<body>
<h1>Halaman home</h1>
<p>selamat datang <b><?=$_SESSION['namalengkap']?></b></p>    


<ul>
    <li><a href="album.php">Album</a></li>
    <li><a href="login.php">Logout</a></li>
</ul>
</body>
</html>