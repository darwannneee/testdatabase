<?php
$conn = mysqli_connect("localhost", "admin", "DarwanMysql05");

if (!$conn) {
    echo "Koneksi Gagal";
} else {
    echo "Koneksi Berhasil";
}
