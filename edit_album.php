<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman edit album</title>
</head>

<body>
    <h1>edit album</h1>
    <p>selamat datang <b><?= $_SESSION['namalengkap'] ?></b></p>


    <ul>
        <li><a href="album.php">Album</a></li>
        <li><a href="login.php">Logout</a></li>
    </ul>

    <form action="update_album.php" method="post">
        <?php
        include "koneksi.php";
        $albumid = $_GET['albumid'];
        $sql = mysqli_query($conn, "select * from album where albumid='albumid'");
        while ($data = mysqli_fetch_array($sql)) {
        ?>
        <input type="text" name="albumid" value="<?= $data['albumid'] ?>">
        <table>
            <tr>
                <td>Nama album</td>
                <td><input type="text" name="namaalbum" value="<?= $data['namaalbum'] ?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value="<?= $data['deskripsi'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="ubah"></td>
            </tr>
        </table>
        <?php
        }
        ?>
</body>

</html>