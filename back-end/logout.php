<?php

session_start();

$_SESSION=[];
session_unset();
session_destroy();

header("Location: ../front-end/login.html");
exit;

 ?>