<?php
@session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Perpustakaan </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>

        <div id="canvas">
            <div id="header">
            SISTEM PERPUSTAKAAN
            </div>

            <div id="menu">
                <ul>
                    <li class="utama"><a href="/helloworld">Beranda</a></li>
                    <li class="utama"><a href="?page=anggota">Data Anggota</a></li>
                    <li class="utama"><a href="?page=petugas">Data Petugas</a></li>
                    <li class="utama"><a href="?page=buku">Data Buku</a></li>
                    <li class="utama"><a href="?page=peminjaman">Data Peminjaman</a></li>
                </ul>
            </div>

            <div id="konten">
                <?php
                    $page = @$_GET['page'];
                    $action = @$_GET['action'];
                    if($page == "anggota"){
                        if($action == ""){
                            include "anggota/lihat.php";
                        }else if($action == "tambah"){
                            include "anggota/tambah.php";
                        }else if($action == "edit"){
                            include "anggota/edit.php";
                        }else if($action == "hapus"){
                            include "anggota/hapus.php";
                        }
                    } else if ($page == "petugas"){
                        if($action == ""){
                            include "petugas/lihat.php";
                        }else if($action == "tambah"){
                            include "petugas/tambah.php";
                        }else if($action == "edit"){
                            include "petugas/edit.php";
                        }else if($action == "hapus"){
                            include "petugas/hapus.php";
                        }
                    } else if ($page == "buku"){
                        if($action == ""){
                            include "buku/lihat.php";
                        }else if($action == "tambah"){
                            include "buku/tambah.php";
                        }else if($action == "edit"){
                            include "buku/edit.php";
                        }else if($action == "hapus"){
                            include "buku/hapus.php";
                        }
                    } else if ($page == "peminjaman"){
                        if($action == ""){
                            include "peminjaman/lihat.php";
                        }else if($action == "tambah"){
                            include "peminjaman/tambah.php";
                        }else if($action == "edit"){
                            include "peminjaman/edit.php";
                        }else if($action == "hapus"){
                            include "peminjaman/hapus.php";
                        }
                    } else if ($page == ""){
                        echo "Selamat Datang Di Halaman Utama";
                    }
                ?>
            </div>

            <div id="footer">
            2021 - Wulan Destyaningsih
            </div>
        </div>

    </body>
</html>