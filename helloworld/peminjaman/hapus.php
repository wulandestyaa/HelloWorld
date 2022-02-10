<?php
$back = '?page=peminjaman';

   if ($_GET['id']){
	$delete = mysqli_query($con, "DELETE FROM tb_transaksi WHERE id_transaksi = '".$_GET['id']."'");
	exit("<script>location.href='" . $back . "';</script>");
}
?> 