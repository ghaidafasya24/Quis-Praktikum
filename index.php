<?php

require 'function.php   ';
// ASC 
$pegawai = query("SELECT * FROM pegawai");

// Jika ingin mengurutkan dari data yg terbaru ditambahkan
// $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

// if (isset($_POST["search"])) {
//     $mahasiswa = cari($_POST["keyword"]);
// }


?>








<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Kepegawain</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<style>
    .table table {
        text-align: center;
    }

    .table table td {
        padding: 1em;
        border: 1px solid black;
    }

    .table table th {
        border: 1px solid black;
    }

    .table table i {
        font-size: 25px;
    }

    form {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form table {
        border: none;
    }
</style>



<body>

    <div class="judul1">
        <h1>Daftar Pegawai</h1>
    </div>

    <br>

    <!-- <div class="form-search">
        <form action="" method="post">
            <table class="search-component">
                <tr>
                    <td>
                        <input type="text" class="form-control" name="keyword" placeholder="Ketikan keyword disini" autofocus autocomplete="off">
                    </td>
                    <td>
                        <button class="btn btn-primary" name="search"><i class="fa-solid fa-search"></i></button>
                    </td>
                </tr>
            </table>
        </form>
    </div> -->

    <br>

    <div class="table">
        <table class="table-dashboard">
            <tr>
                <th>No. </th>
                <th>Nama Pegawai</th>
                <th>Email</th>
                <th>No Telp</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($pegawai as $row) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row["nama_pegawai"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["no_telp"]; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>"><i class="fa-solid fa-pen-to-square"></i></a> |
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin nih mau hapus datanya?');"><i class="fa-solid fa-trash text-danger"></i></a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>

    

    <div class="tambah">
        <a href="tambah.php"><i class="fa-solid fa-user-plus"></i></a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>