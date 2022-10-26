<?php

include_once("conn.php");

$result = mysqli_query($conn, "SELECT * FROM tb_pinjam ORDER BY id DESC");
$i = 1;



?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4">

        <a href="add.php" class="btn btn-primary m-4">Tambah</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                while ($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<th>" . $i++ . "</th>";
                    echo "<td>" . $user_data['tgl'] . "</td>";
                    echo "<td>" . $user_data['nama_pinjam'] . "</td>";
                    echo "<td>" . $user_data['nama_barang'] . "</td>";
                    echo "<td>" . $user_data['jumlah'] . "</td>";
                    echo "<td><a class='btn btn-primary' href='update.php?id=$user_data[id]'>Edit</a>  <a class='btn btn-danger' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>





    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>