<?php
// NekoHappy
// Feito por kaway404
// Feito por um unico membro

if(empty($_COOKIE['iduser']) && (empty($_COOKIE['cry']) )){
if(isset($_GET['cadastro'])){
	require './view/account/cadastro.php';
}
else if(isset($_GET['login'])){
	require './view/account/login.php';
}
else{
	require './view/home/index.php';
}
}
else{
	if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
	require './autoload/user/user.php';
	if(isset($_GET['ajustes'])){
		require './view/dashboard/ajustes.php';
	}
	else{
	require './view/dashboard/home.php';
	}
	}
	else{
		if(isset($_GET['cadastro'])){
		require './view/account/cadastro.php';
	}
	else if(isset($_GET['login'])){
		require './view/account/login.php';
	}
	else{
		require './view/home/index.php';
	}
	}
}