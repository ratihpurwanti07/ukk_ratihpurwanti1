<?php
include "koneksi.php";
session_start();

$nalbumid = $_GET['album'];

$sql = mysqli_query($conn, "delete from album where albumid='$albumid'");

header("location:album.php");