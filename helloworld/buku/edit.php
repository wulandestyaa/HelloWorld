<fieldset>
    <legend>Edit Data Buku</legend>

    <?php
        $query = mysqli_query($con,"SELECT * FROM tb_anggota WHERE id_anggota = '".$_GET['id']."'");
        $r = mysqli_fetch_array($query);
    ?>

    <form action="" method="post">
        <table>
            <input type="hidden" name="id_anggota" value="<?php echo $r['id_anggota'];?>"/>
            <tr>
                <td>Nama Anggota</td>
                <td>:</td>
                <td><input type="text" name="nama_anggota" value="<?php echo $r['nama_anggota'];?>"/></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>:</td>
                <td><input type="number" name="no_hp" value="<?php echo $r['no_hp'];?>"/></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" rows="3"> <?php echo $r['alamat'];?> </textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="edit" value="Simpan"/> <input type="reset" value="Batal"/></td>
            </tr>
        </table>
    </form>

    <?php
        $id_anggota = @$_POST['id_anggota'];
        $nama_anggota = @$_POST['nama_anggota'];
        $no_hp = @$_POST['no_hp'];
        $alamat = @$_POST['alamat'];

        $edit_anggota = @$_POST['edit'];

        if($edit_anggota){
            $id_anggota  = @$_POST['id_anggota'];
            $nama_anggota = @$_POST['nama_anggota'];
            $no_hp        = @$_POST['no_hp'];
            $alamat        = @$_POST['alamat'];
    
            $query = mysqli_query($con, "UPDATE tb_anggota SET nama_anggota='$nama_anggota', no_hp='$no_hp', alamat='$alamat' WHERE id_anggota='$id_anggota'");
    
            if($query){
            echo"<script>alert('Data Berhasil Tersimpan');
                document.location.href='?page=anggota'</script>";
            }else{
                echo"<script>alert('Error');
                document.location.href='?page=anggota&action=edit'</script>";
            }
        }
    ?>
    
</fieldset>