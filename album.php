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
    <title>halaman album</title>
</head>

<body>
    <h1>Halaman album</h1>
    <p>selamat datang <b><?= $_SESSION['namalengkap'] ?></b></p>


    <ul>
        <li><a href="album.php">Album</a></li>
        <li><a href="login.php">Logout</a></li>
    </ul>

    <form action="tambah_album.php" method="post">
        <table>
            <tr>
                <td>Nama album</td>
                <td><input type="text" name="namaalbum"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="tambah"></td>
            </tr>
        </table>

        <table border="1" cellpadding=5 cellspacing=0>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Tanggal dibuat</th>
                <th>Aksi</th>
            </tr>
            <?php
            include "koneksi.php";
            $userid = $_SESSION['userid'];
            $sql = mysqli_query($conn, "select * from album where userid='$userid'");
            while ($data = mysqli_fetch_array($sql)) {
            ?>
            <tr><?= $data['albumid'] ?></tr>
            <tr><?= $data['namaalbum'] ?></tr>
            <tr><?= $data['deskripsi'] ?></tr>
            <tr><?= $data['tanggaldibuat'] ?></tr>
            <td>
                <a href="hapus_album.php?albumid=<?= $data['albumid'] ?>">Hapus</a>
                <a href="edit_album.php?albumid=<?= $data['albumid'] ?>">edit</a>
            </td>

            <?php
            }
            ?>
        </table>
    </form>


</body>

</html>