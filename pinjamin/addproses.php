<?php


include_once("conn.php");



if (isset($_POST['add'])) {

    $tgl = $_POST['tgl'];
    $nama_pinjam = $_POST['nama_pinjam'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];

    $result = mysqli_query($conn, "INSERT INTO `tb_pinjam` (`id`, `tgl`, `nama_pinjam`, `nama_barang`, `jumlah`) VALUES (NULL, '$tgl', '$nama_pinjam', '$nama_barang', '$jumlah')");
    header("Location: index.php");
}
