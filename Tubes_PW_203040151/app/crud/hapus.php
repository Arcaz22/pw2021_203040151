<?php
// Chandra Arcychan Azfar
// 203040151
// Jum'at 13.00
require '../helper/functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
	echo "
			<script>
				alert('data berhasil dihapus!');
				document.location.href = '../admin/admin.php';
			</script>
		";
} else {
	echo "
			<script>
				alert('data gagal dihapus!');
				document.location.href = '../admin/admin.php';
			</script>
		";
}
