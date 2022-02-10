<fieldset>
    <legend>Tambah Data Buku</legend>

    <form action="" method="post">
        <table>
            <input type="hidden" name="id_buku"/>
            <tr>
                <td>Judul Buku</td>
                <td>:</td>
                <td><input type="text" name="judul"/></td>
            </tr>
            <tr>
                <td>Nama Pengarang</td>
                <td>:</td>
                <td><input type="text" name="pengarang"/></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tambah" value="Tambah"/> <input type="reset" value="Batal"/></td>
            </tr>
        </table>
    </form>

    <?php
        $id_buku = @$_POST['id_buku'];
        $judul = @$_POST['judul'];
        $pengarang = @$_POST['pengarang'];

        $tambah_buku = @$_POST['tambah'];

        if($tambah_buku){
            $id_buku  = @$_POST['id_buku'];
            $judul = @$_POST['judul'];
            $pengarang = @$_POST['pengarang'];
    
            $query = mysqli_query($con, "INSERT INTO tb_buku VALUES('$id_buku','$judul','$pengarang')");
    
            if($query){
            echo"<script>alert('Data Berhasil Tersimpan');
                document.location.href='?page=buku'</script>";
            }else{
                echo"<script>alert('Error');
                document.location.href='?page=buku&action=tambah'</script>";
            }
        }
    ?>
</fieldset>