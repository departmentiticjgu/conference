<?php
session_start();
include 'koneksi.php';

$koneksi = new Koneksi();

$username = $_POST['username'];
$password = $_POST['password'];

$conn = mysqli_connect($koneksi->local, $koneksi->username, $koneksi->password, $koneksi->database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Cek username
$query = "SELECT * FROM admin WHERE username = '$username'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if ($data) {
    // Gunakan password_verify untuk mencocokkan password
    if (password_verify($password, $data['password'])) {
        $_SESSION['admin'] = $data['username'];
        $_SESSION['admin_id'] = $data['id']; // opsional kalau butuh id admin
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Password salah!'); window.location.href='login.php';</script>";
    }
} else {
    echo "<script>alert('Akun tidak ditemukan!'); window.location.href='login_admin.php';</script>";
}
