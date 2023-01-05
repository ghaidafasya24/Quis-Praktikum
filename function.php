<?php

//Koneksi database
$connect = mysqli_connect("localhost", "root", "", "kepegawaian");


function query($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $connect;

    $nama_pegawai = $data["nama_pegawai"];
    $email = $data["email"];
    $no_telp = $data["no_telp"];

    //query insert
    $query = "INSERT INTO pegawai VALUES ('', '$nama_pegawai' ,'$email' ,'$no_telp')";
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

function hapus($id) {
    global $connect;
    mysqli_query($connect, "DELETE FROM pegawai WHERE id = $id");

    return mysqli_affected_rows($connect);
}

function ubah($data) {
    global $connect;

    $id              = $data["id"];
    $nama            = $data["nama_pegawai"];
    $email           = $data["email"];
    $no_telp         = $data["no_telp"];

    //query insert
    $query = "UPDATE pegawai SET 
                nama_pegawai    = '$nama',
                email           = '$email',
                no_telp         = '$no_telp'

              WHERE id = $id  
    
            ";
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

// function cari($keyword) {
//     $query = "SELECT * FROM pegawai 
//                 WHERE 
//                 nama_pegawai LIKE '%$keyword%' OR
//                 email LIKE '%$keyword%'
//             ";
//     return query($query);
// }

// function registrasi($data) {
//     global $connect;

//     $username = strtolower(stripslashes($data["username"]));
//     $password = mysqli_real_escape_string($connect, $data["password"]);
//     $confirmPassword = mysqli_real_escape_string($connect, $data["confirm-password"]);

//     //cek apakah username sudah ada atau belum
//     $result = mysqli_query($connect, "SELECT username FROM user WHERE username = '$username'");

//     if ( mysqli_fetch_assoc($result)) {
//         echo "<script>
//                 alert('Username yang dipilih sudah terdaftar')
//             </script>";
//             return false;
//     }   


//     if ($password !== $confirmPassword) {
//         echo "<script>
//                 alert('Password tidak sama')
//             </script>";
//         return false;
//     } 
    
//     //enskripsi password
//     $password = password_hash($password, PASSWORD_DEFAULT);

//     //tambahkan userbaru ke database
//     mysqli_query($connect, "INSERT INTO user VALUES('', '$username', 
//     '$password')");

//     return mysqli_affected_rows($connect);



// }


 
?>