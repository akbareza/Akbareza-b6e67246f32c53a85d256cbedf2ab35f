<?php 

$koneksi = mysqli_connect("localhost", "root", "", "testMKM");

function insert($data){

	global $koneksi;

	$username = htmlspecialchars($data["username"]);
	$password = htmlspecialchars($data["password"]);
	$repeatPassword = htmlspecialchars($data["repeatPassword"]);
	$date = date("Y/m/d h:i:sa");

	//query insert
	if ($password==$repeatPassword) {
		
		$query = "INSERT INTO tb_User VALUES ('', '$username', '$password', '0', 'null')";

		mysqli_query($koneksi,$query);

		return mysqli_affected_rows($koneksi);
	}else{

		return mysqli_affected_rows($koneksi);

	}

}

?>