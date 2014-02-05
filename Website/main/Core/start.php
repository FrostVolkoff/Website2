<?php
session_start();

include '../Database/Connections/connections.php';
include '../Database/Functions/protection.php';

if (logIn() === true)
{
	$sessionIdUser = $_SESSION['iduser'];
	$userData = userData($sessionIdUser, 'iduser', 'username', 'password');
	
	if (activeUser($userData['username']) === false)
	{
		session_destroy();
		header('location: ../Pages/homepage.php');
		exit();
	}
}

?>