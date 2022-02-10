
<a href="?page=anggota&action=tambah"> <button> <strong>Tambah</strong> </button> </a> <br><br>
<fieldset>
    <table width="100%" border="1px" style="border-cpllapse:collapse;">
        <tr style="background-color:#FC0;">
            <th>No</th>
            <th>Nama Anggota</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <?php
            $no=1;
            $q = mysqli_query($con,"SELECT * FROM tb_anggota ORDER BY id_anggota") or die (mysqli_error());
            while($r = mysqli_fetch_array($q)){
        ?>
        <tr>
            <td align="center"><?php echo $no++; ?></td>
            <td><?php echo $r['nama_anggota']; ?></td>
            <td><?php echo $r['no_hp']; ?></td>
            <td><?php echo $r['alamat']; ?></td>
            <td align="center">
                <a href="?page=anggota&action=edit&id=<?php echo $r['id_anggota'];?>"><button>Edit</button></a>
                <a onclick="return confirm('Yakin ingin menghapus data ?')" href="?page=anggota&action=hapus&id=<?php echo $r['id_anggota'];?>"><button>Hapus</button></a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</fieldset>