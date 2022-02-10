
<a href="?page=buku&action=tambah"> <button> <strong>Tambah</strong> </button> </a> <br><br>
<fieldset>
    <table width="100%" border="1px" style="border-cpllapse:collapse;">
        <tr style="background-color:#FC0;">
            <th>No</th>
            <th>Judul Buku</th>
            <th>Nama Pengarang</th>
            <th>Opsi</th>
        </tr>
        <?php
            $no=1;
            $q = mysqli_query($con,"SELECT * FROM tb_buku ORDER BY id_buku") or die (mysqli_error());
            while($r = mysqli_fetch_array($q)){
        ?>
        <tr>
            <td align="center"><?php echo $no++; ?></td>
            <td><?php echo $r['judul']; ?></td>
            <td><?php echo $r['pengarang']; ?></td>
            <td align="center">
                <a href="?page=buku&action=edit&id=<?php echo $r['id_buku'];?>"><button>Edit</button></a>
                <a onclick="return confirm('Yakin ingin menghapus data ?')" href="?page=buku&action=hapus&id=<?php echo $r['id_buku'];?>"><button>Hapus</button></a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</fieldset>