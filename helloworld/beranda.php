<?php 
    session_start();
    include "koneksi.php";
?>

<html>
    <head>
        <title>Sistem Perpustakaan</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>

    <body>

        <div id="canvas">

            <div id="menu">
                <ul>
                    <li class="active"><a href = "beranda.php">Beranda</a></li>
                    <li><a href = "anggota.php">Data Anggota</a></li>
                    <li><a href = "petugas.php">Data Petugas</a></li>
                    <li><a href = "buku.php">Data Buku</a></li>
                    <li><a href = "peminjaman.php">Data Peminjaman</a></li>
                </ul>
            </div>
           
            <div id="konten">
                <p class="judul">SELAMAT DATANG DI SISTEM PERPUSTAKAAN</p>
            </div>

            <div id="footer">
                <h4> Wulan Destyaningsih </h4>
            </div>
            
    </body>
</html>