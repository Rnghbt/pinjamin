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

        <h1 class="my-3">Tambah Data</h1>
        <form action="addproses.php" method="post">

            <div class="mb-3 row">
                <div class="col-sm-6">
                    <label for="nama-pinjam">Nama Peminjam</label>
                    <input name="nama_pinjam" type="text" class="form-control" id="nama-pinjam" required>
                </div>
                <div class="col-sm-2">
                    <label for="tgl">Tanggal</label>
                    <input name="tgl" type="date" class="form-control" id="tgl" required>
                </div>
            </div>


            <div class="mb-3 row">
                <div class="col-sm-6">
                    <label for="nama-barang">Nama Barang</label>
                    <input name="nama_barang" type="text" class="form-control" id="nama-barang" required>
                </div>
                <div class="col-sm-2">
                    <label for="jumlah">Jumlah Barang</label>
                    <input name="jumlah" type="number" class="form-control" id="jumlah" required>
                </div>
            </div>

            <input type="submit" class="btn btn-primary" name="add" value="Tambah">
            <a href="/../pinjamin" class="btn btn-success">Kembali</a>

        </form>



    </div>



    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>