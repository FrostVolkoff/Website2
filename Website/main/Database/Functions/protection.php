<?php 

//Se estiver logado avanca para a homepage....
function pageLockLogin()
{
	if (login() === true)
	{
		header('location ../Pages/homepage.php');
		exit();
	}
}
//Protecao se nao estiver logado avanca para a pagina de protecao
function pageProtection()
{
	if (login() === false)
	{
		header('location: ../Pages/locked.php');
		exit();
	}
}

?>