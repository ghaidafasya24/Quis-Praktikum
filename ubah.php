<?php

require  'function.php';

//Ambil data dari url
$id = $_GET["id"];

// Query data pegawai bedasarkan id
$pegawai = query("SELECT * FROM pegawai WHERE id = $id")[0];




//Cek apakah tombol sudah ditekan atau belom
if (isset($_POST["submit"])) {

    // Cek apakah data sudah berhasil di ubah atau belum
    if (ubah($_POST) > 0) {
        echo
        "<script>
            alert('Data berhasil diubah');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo
        "<script>
            alert('Data gagal diubah :( ');
        </script>";
    }
}


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Pegawai</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <div class="judul1">
        <h1>Ubah Data Pegawai</h1>
    </div>

    <div class="form">
        <form action="" method="post">
            <table>
                <input type="hidden" name="id" value="<?= $pegawai["id"] ?>">
                <tr>
                    <td><label for="nama_pegawai">Nama Pegawai</label></td>
                    <td>:</td>
                    <td><input type="text" placeholder="isi nama..." name="nama_pegawai" id="nama_pegawai" require class="form-control" value="<?= $pegawai["nama_pegawai"] ?>"></td>
                </tr>
                <tr>
                    <td><label for="email">Email </label></td>
                    <td>:</td>
                    <td><input type="text" placeholder="isi email..." name="email" id="email" require class="form-control" value="<?= $pegawai["email"] ?>"></td>
                </tr>
    
                <tr>
                    <td><label for="no_telp">No Telp</label></td>
                    <td>:</td>
                    <td><input type="no_telp" placeholder="isi no telp..." name="no_telp" id="no_telp" require class="form-control" value="<?= $pegawai["no_telp"] ?>"></td>
                </tr>
                <tr>
                    <td><a href="index.php" class=" btn-primary"><i class="fa-solid fa-backward"></i></a></td>
                    <td></td>
                    <td><button type="submit" name="submit" class="btn btn-primary">Ubah data</button></td>
                </tr>
            </table>
        </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>