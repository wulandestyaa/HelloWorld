<fieldset>
    <legend>Edit Data Petugas</legend>

    <?php
        $query = mysqli_query($con,"SELECT * FROM tb_petugas WHERE id_petugas = '".$_GET['id']."'");
        $r = mysqli_fetch_array($query);
    ?>

    <form action="" method="post">
        <table>
            <input type="hidden" name="id_petugas" value="<?php echo $r['id_petugas'];?>"/>
            <tr>
                <td>Nama Petugas</td>
                <td>:</td>
                <td><input type="text" name="nama_petugas" value="<?php echo $r['nama_petugas'];?>"/></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="edit" value="Simpan"/> <input type="reset" value="Batal"/></td>
            </tr>
        </table>
    </form>

    <?php
        $id_petugas = @$_POST['id_petugas'];
        $nama_petugas = @$_POST['nama_petugas'];

        $edit_petugas = @$_POST['edit'];

        if($edit_petugas){
            $id_petugas  = @$_POST['id_petugas'];
            $nama_petugas = @$_POST['nama_petugas'];
    
            $query = mysqli_query($con, "UPDATE tb_petugas SET nama_petugas='$nama_petugas' WHERE id_petugas='$id_petugas'");
    
            if($query){
            echo"<script>alert('Data Berhasil Tersimpan');
                document.location.href='?page=petugas'</script>";
            }else{
                echo"<script>alert('Error');
                document.location.href='?page=petugas&action=edit'</script>";
            }
        }
    ?>
    
</fieldset>