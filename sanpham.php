<?php
    if(empty(session_id()))
	{
		session_start();
	}
	$index = false;
	$sanpham = true;
	$single_product = false;
	$cart = false;
	$login = false;
	$user_profile = false;
	include("config.php");
	include_once("DB.php");
	include("../DoAnWeb/data/xu_ly_show_san_pham.php");
	include("../DoAnWeb/layout/control.php");