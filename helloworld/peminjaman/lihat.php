
<a href="?page=peminjaman&action=tambah"> <button> <strong>Tambah</strong> </button> </a> <br><br>
<fieldset>
    <table width="100%" border="1px" style="border-cpllapse:collapse;">
        <tr style="background-color:#FC0;">
            <th>No</th>
            <th>Tanggal Peminjaman</th>
            <th>Nama Peminjam</th>
            <th>Judul Buku</th>
            <th>Nama Petugas</th>
            <th>Opsi</th>
        </tr>
        <?php
            $no=1;
            $q = mysqli_query($con,"SELECT tb_transaksi.id_transaksi, tb_transaksi.tgl_peminjaman, tb_anggota.nama_anggota, tb_buku.judul, tb_petugas.nama_petugas FROM tb_transaksi, tb_anggota, tb_buku, tb_petugas WHERE tb_transaksi.id_anggota = tb_anggota.id_anggota AND tb_transaksi.id_buku = tb_buku.id_buku AND tb_transaksi.id_petugas = tb_petugas.id_petugas") or die (mysqli_error());
            while($r = mysqli_fetch_array($q)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $r['tgl_peminjaman']; ?></td>
            <td><?php echo $r['nama_anggota']; ?></td>
            <td><?php echo $r['judul']; ?></td>
            <td><?php echo $r['nama_petugas']; ?></td>
            <td align="center">
                <a href="?page=peminjaman&action=edit&id=<?php echo $r['id_transaksi'];?>"><button>Edit</button></a>
                <a onclick="return confirm('Yakin ingin menghapus data ?')" href="?page=peminjaman&action=hapus&id=<?php echo $r['id_transaksi'];?>"><button>Hapus</button></a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</fieldset>