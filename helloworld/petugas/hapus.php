<?php
$back = '?page=petugas';

   if ($_GET['id']){
	$delete = mysqli_query($con, "DELETE FROM tb_petugas WHERE id_petugas = '".$_GET['id']."'");
	exit("<script>location.href='" . $back . "';</script>");
}
?> 