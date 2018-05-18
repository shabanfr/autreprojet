<?php 

class banque
{
	function __construct($a)
	{
		define('ARGENT',$a);
	}
	function compte()
	{
		return "Vous avez ". ARGENT . "€";
	}
}

$user = new banque(50);
echo $user->compte();
