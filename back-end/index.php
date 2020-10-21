<?php 

session_start();

if(!isset($_SESSION["login"])){
	header("Location: ../front-end/login.html");
	exit;
}
?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Home</title>
</head>
<body>

	<h1>HOME</h1>

	<a class="btn btn-primary" href="../back-end/logout.php" role="button">Logout</a>

</body>
</html>