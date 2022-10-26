<?php
// include database connection file
include_once("conn.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {

    $id = $_POST['id'];

    $tgl = $_POST['tgl'];
    $nama_pinjam = $_POST['nama_pinjam'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];

    // update user data
    $result = mysqli_query($conn, "UPDATE tb_pinjam SET `tgl` ='$tgl', `nama_pinjam` = '$nama_pinjam', `nama_barang` = '$nama_barang', `jumlah` ='$jumlah' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
