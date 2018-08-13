<?php
// NekoHappy
// Feito por kaway404
// Feito por um unico membro
if(isset($_COOKIE['cry']) ){
if(empty($_COOKIE['iduser']) ){
	require './autoload/user/user.php';
	require './view/account/again.php';
}
}

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
	require './view/dashboard/menu.php';
	require './view/dashboard/home.php';
	}
	if(isset($_COOKIE['cry']) ){
	if(empty($_COOKIE['iduser']) ){
		echo '';
	}
	}
	
}