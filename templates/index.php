<?php
// NekoHappy
// Feito por kaway404
// Feito por um unico membro
require './config/config.php';
// Iniciar variaves globals
require './config/globals.php';
require './autoload/requireme.php';


if($manu == 0){
if($template == $databasehm){
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

if(isset($_COOKIE['verificar']) ){
if(empty($_COOKIE['iduser']) && (empty($_COOKIE['cry']) )){
	require './autoload/user/user.php';
	require './view/account/check.php';
}
}
else{

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
else if(isset($_GET['profile'])){
	require './view/dashboard/menu_not.php';
	require './view/profile/user.php';
}
else if(isset($_GET['title'])){
	require './view/dashboard/menu_not.php';
	require './view/anime/title.php';
	}
else{
	require './view/home/index.php';
}
require './php/main/randback.php';
}
else{
	if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
	require './autoload/user/user.php';
	if($user['config'] == 0){
	require './view/dashboard/menu.php';
	require './view/dashboard/config.php';
	}
	else{
	if(isset($_GET['profile'])){
	require './view/dashboard/menu.php';
	require './view/profile/user.php';
	}
	else if(isset($_GET['createpage'])){
		require './view/dashboard/menu.php';
		require './view/page/create.php';
	}
	else if(isset($_GET['lojinha'])){
		require './view/dashboard/menu.php';
		require './view/shop/loja.php';
	}
	else if(isset($_GET['comunidade'])){
	require './view/dashboard/menu.php';
	require './view/page/vendo.php';
	}
	else if(isset($_GET['toprank'])){
	require './view/dashboard/menu.php';
	require './view/rank/top.php';
	}
	else if(isset($_GET['title'])){
	require './view/dashboard/menu.php';
	require './view/anime/title.php';
	}
	else{
	require './view/dashboard/menu.php';
	require './view/dashboard/home.php';
	}
	}
	}
	if(isset($_COOKIE['cry']) ){
	if(empty($_COOKIE['iduser']) ){
		echo '';
	}
	}
}
}
}
}
else{
	require './view/notme/index.php';
}
}
else{
	require './view/manu/index.php';
}