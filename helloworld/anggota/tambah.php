<fieldset>
    <legend>Tambah Data Anggota</legend>

    <form action="" method="post">
        <table>
            <input type="hidden" name="id_anggota"/>
            <tr>
                <td>Nama Anggota</td>
                <td>:</td>
                <td><input type="text" name="nama_anggota"/></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>:</td>
                <td><input type="number" name="no_hp"/></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" rows="3"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tambah" value="Tambah"/> <input type="reset" value="Batal"/></td>
            </tr>
        </table>
    </form>

    <?php
        $id_anggota = @$_POST['id_anggota'];
        $nama_anggota = @$_POST['nama_anggota'];
        $no_hp = @$_POST['no_hp'];
        $alamat = @$_POST['alamat'];

        $tambah_anggota = @$_POST['tambah'];

        if($tambah_anggota){
            $id_anggota  = @$_POST['id_anggota'];
            $nama_anggota = @$_POST['nama_anggota'];
            $no_hp        = @$_POST['no_hp'];
            $alamat        = @$_POST['alamat'];
    
            $query = mysqli_query($con, "INSERT INTO tb_anggota VALUES('$id_anggota','$nama_anggota','$no_hp','$alamat')");
    
            if($query){
            echo"<script>alert('Data Berhasil Tersimpan');
                document.location.href='?page=anggota'</script>";
            }else{
                echo"<script>alert('Error');
                document.location.href='?page=anggota&action=tambah'</script>";
            }
        }
    ?>
</fieldset>