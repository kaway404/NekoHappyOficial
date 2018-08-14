<?php
// NekoHappy
// Feito por kaway404
// Feito por um unico membro
require './config/config.php';
// Iniciar variaves globals
require './config/globals.php';

if(!$conn){
  	require './view/nodb/index.php';
}
else{

if(isset($_COOKIE['cry']) ){
if(empty($_COOKIE['iduser']) ){
	require './autoload/user/user.php';
	require './view/account/again.php';
}
}

if(isset($_COOKIE['iduser']) ){
	if(empty($_COOKIE['cry']) ){
	if(empty($_COOKIE['passwordchange']) ){
		require './autoload/user/user.php';
		require './view/account/alter.php';
	}
}
}

if(isset($_COOKIE['iduser']) ){
	if(empty($_COOKIE['cry']) ){
	if(isset($_COOKIE['passwordchange']) ){
		require './autoload/user/user.php';
		require './view/account/nova.php';
	}
}
}



if(empty($_COOKIE['iduser']) && (empty($_COOKIE['cry']) )){
if(isset($_GET['cadastro'])){
	require './view/account/cadastro.php';
}
else if(isset($_GET['login'])){
	require './view/account/login.php';
}
else if(isset($_GET['esqueci'])){
	require './view/account/forgot.php';
}
else{
	require './view/home/index.php';
}
}
else{
	if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
	require './autoload/user/user.php';
	if($user['config'] == 0){
	require './view/dashboard/menu.php';
	require './view/dashboard/config.php';
	}
	else{
	require './view/dashboard/menu.php';
	require './view/dashboard/home.php';
	}
	}
	if(isset($_COOKIE['cry']) ){
	if(empty($_COOKIE['iduser']) ){
		echo '';
	}
	}
}
}