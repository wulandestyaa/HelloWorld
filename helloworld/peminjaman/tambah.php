<fieldset>
    <legend>Tambah Data Peminjaman</legend>

    <form action="" method="post">
        <table>
            <input type="hidden" name="id_transaksi"/>
            <tr>
                <td>Tanggal Peminjaman</td>
                <td>:</td>
                <td><input type="date" name="tgl_peminjaman"/></td>
            </tr>
            <tr>
                <td>Nama Anggota</td>
                <td>:</td>
                <td>
                    <select class="form-control select" name="id_anggota" data-live-search="true" required>
                        <option> -Pilih- </option>
                            <?php
                                $qanggota = "SELECT * FROM tb_anggota ORDER BY id_anggota";
                                $qanggota = mysqli_query($con, $qanggota);
                                    while ($ranggota = mysqli_fetch_array($qanggota)){
                                        echo "<option value='$ranggota[id_anggota]'> $ranggota[nama_anggota]</option>";
                                    }
                            ?>
                    </select> 
                </td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td>:</td>
                <td>
                    <select class="form-control select" name="id_buku" data-live-search="true" required>
                        <option> -Pilih- </option>
                            <?php
                                $qbuku = "SELECT * FROM tb_buku ORDER BY id_buku";
                                $qbuku = mysqli_query($con, $qbuku);
                                    while ($rbuku = mysqli_fetch_array($qbuku)){
                                        echo "<option value='$rbuku[id_buku]'> $rbuku[judul]</option>";
                                    }
                            ?>
                    </select> 
                </td>
            </tr>
            <tr>
                <td>Nama Petugas</td>
                <td>:</td>
                <td>
                    <select class="form-control select" name="id_petugas" data-live-search="true" required>
                        <option> -Pilih- </option>
                            <?php
                                $qpetugas = "SELECT * FROM tb_petugas ORDER BY id_petugas";
                                $qpetugas = mysqli_query($con, $qpetugas);
                                    while ($rpetugas = mysqli_fetch_array($qpetugas)){
                                        echo "<option value='$rpetugas[id_petugas]'> $rpetugas[nama_petugas]</option>";
                                    }
                            ?>
                    </select> 
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tambah" value="Tambah"/> <input type="reset" value="Batal"/></td>
            </tr>
        </table>
    </form>

    <?php
         $id_transaksi = @$_POST['id_transaksi'];
         $tgl_peminjaman = @$_POST['tgl_peminjaman'];
         $id_anggota = @$_POST['id_anggota'];
         $id_buku = @$_POST['id_buku'];
         $id_petugas = @$_POST['id_petugas'];

        $tambah_peminjaman = @$_POST['tambah'];

        if($tambah_peminjaman){
            $id_transaksi = @$_POST['id_transaksi'];
            $tgl_peminjaman = @$_POST['tgl_peminjaman'];
            $id_anggota = @$_POST['id_anggota'];
            $id_buku = @$_POST['id_buku'];
            $id_petugas = @$_POST['id_petugas'];
    
            $query = mysqli_query($con, "INSERT INTO tb_transaksi VALUES('$id_transaksi','$tgl_peminjaman','$id_anggota','$id_buku','$id_petugas')");
    
            if($query){
            echo"<script>alert('Data Berhasil Tersimpan');
                document.location.href='?page=peminjaman'</script>";
            }else{
                echo"<script>alert('Error');
                document.location.href='?page=peminjaman&action=tambah'</script>";
            }
        }
    ?>
</fieldset>