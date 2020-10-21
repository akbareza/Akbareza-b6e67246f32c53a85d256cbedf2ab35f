<?php 

session_start();

if(isset($_SESSION["login"])){
	header("Location: index.php");
	exit;
}

require 'config.php';

	$username = $_POST["username"];
	$password = $_POST["password"];
	$date = date("Y/m/d h:i:sa");

	$login = mysqli_query($koneksi, "SELECT * FROM tb_User WHERE user_username = '$username' AND user_password='$password'");
	$row=mysqli_fetch_array($login);
	if ($row['user_username'] == $username AND $row['user_password'] == $password)
	{
		$query = "UPDATE tb_User SET user_status='1', login_time='$date' WHERE user_username = '$username'";
		mysqli_query($koneksi,$query);

		session_start();
	  	$_SESSION["login"] = true;
	  	// $_SESSION['password'] = $row['user_password'];
	  	header("Location: ../back-end/index.php");
	}else{

	  	header("Location: ../front-end/login.html");
	}
?>

