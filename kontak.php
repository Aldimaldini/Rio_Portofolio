<?php
session_start();
include 'koneksi.php';

// menambah album
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $addtotable = mysqli_query($conn, "insert into kontak (name, email, message) values('$name', '$email', '$message')");
    if ($addtotable) {
        echo '
                <script>
                    alert("Pesan berhasil di kirim");
                    window.location.href="index.php";
                </script>
                ';
    } else {
        echo '
                <script>
                    alert("Pesan gagal di kirim");
                    window.location.href="index.php";
                </script>
                ';
    }
}
?>