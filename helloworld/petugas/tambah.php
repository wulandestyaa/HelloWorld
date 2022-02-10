<fieldset>
    <legend>Tambah Data Petugas</legend>

    <form action="" method="post">
        <table>
            <input type="hidden" name="id_petugas"/>
            <tr>
                <td>Nama Petugas</td>
                <td>:</td>
                <td><input type="text" name="nama_petugas"/></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tambah" value="Tambah"/> <input type="reset" value="Batal"/></td>
            </tr>
        </table>
    </form>

    <?php
    

        $tambah_petugas = @$_POST['tambah'];

        if($tambah_petugas){
            $id_petugas  = @$_POST['id_petugas'];
            $nama_petugas  = @$_POST['nama_petugas'];
    
            $query = mysqli_query($con, "INSERT INTO tb_petugas VALUES('$id_petugas','$nama_petugas')");
    
            if($query){
            echo"<script>alert('Data Berhasil Tersimpan');
                document.location.href='?page=petugas'</script>";
            }else{
                echo"<script>alert('Error');
                document.location.href='?page=petugas&action=tambah'</script>";
            }
        }
    ?>
</fieldset>