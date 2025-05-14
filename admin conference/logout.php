<?php
session_start();
session_destroy(); // Hapus semua session

echo "<script>
            alert('Logout Berhasil');
            window.location='../index.php';
          </script>";
exit();
?>
