<?php
    if(empty(session_id()))
	{
		session_start();
	}
	$index = false;
	$sanpham = false;
	$quanly_sanpham = true;
	$cart = false;
	$login = false;
	$single_product = false;
	$user_profile = false;
	include("config.php");
	include_once("DB.php");
	include("../DoAnWeb/data/xu_ly_sua_san_pham.php");
	include("../DoAnWeb/layout/control.php");