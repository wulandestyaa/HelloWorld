
<a href="?page=petugas&action=tambah"> <button> <strong>Tambah</strong> </button> </a> <br><br>
<fieldset>
    <table width="100%" border="1px" style="border-cpllapse:collapse;">
        <tr style="background-color:#FC0;">
            <th>No</th>
            <th>Nama Petugas</th>
            <th>Opsi</th>
        </tr>
        <?php
            $no=1;
            $q = mysqli_query($con,"SELECT * FROM tb_petugas ORDER BY id_petugas") or die (mysqli_error());
            while($r = mysqli_fetch_array($q)){
        ?>
        <tr>
            <td align="center"><?php echo $no++; ?></td>
            <td><?php echo $r['nama_petugas']; ?></td>
            <td align="center">
                <a href="?page=petugas&action=edit&id=<?php echo $r['id_petugas'];?>"><button>Edit</button></a>
                <a onclick="return confirm('Yakin ingin menghapus data ?')" href="?page=petugas&action=hapus&id=<?php echo $r['id_petugas'];?>"><button>Hapus</button></a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</fieldset>