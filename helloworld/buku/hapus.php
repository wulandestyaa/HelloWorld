<?php
$back = '?page=buku';

   if ($_GET['id']){
	$delete = mysqli_query($con, "DELETE FROM tb_buku WHERE id_buku = '".$_GET['id']."'");
	exit("<script>location.href='" . $back . "';</script>");
}
?> 