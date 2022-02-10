<?php
$back = '?page=anggota';

   if ($_GET['id']){
	$delete = mysqli_query($con, "DELETE FROM tb_anggota WHERE id_anggota = '".$_GET['id']."'");
	exit("<script>location.href='" . $back . "';</script>");
}
?> 