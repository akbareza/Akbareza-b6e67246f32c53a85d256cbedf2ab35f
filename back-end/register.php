<?php

require 'config.php';

if(isset($_POST["register"])){
	if(insert($_POST)>0){
		echo "
			<script>
				alert('Daya Karyawan Berhasil Ditambahkan');
				document.location.href = '../front-end/login.html';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Daya Karyawan Gagal Ditambahkan');
				document.location.href = '../front-end/login.html';
			</script>
		";
	}
}
?>