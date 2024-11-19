<?php
// Memulai sesi
session_start();

// Mengambil nilai captcha dari inputan pengguna
$inputCaptcha = $_POST['nilaiCaptcha'];

// Memeriksa apakah captcha yang dimasukkan sesuai dengan captcha yang disimpan dalam sesi
if($inputCaptcha == $_SESSION['Captcha']){
    // Jika captcha benar, arahkan pengguna ke halaman sukses atau lakukan tindakan lain
    header("Location: sukses.php"); // Ganti dengan halaman sukses atau aksi lain
} else {
    // Jika captcha salah, kembalikan ke halaman sebelumnya dengan pesan kesalahan
    header("Location: index.php?pesan=salah");
}
