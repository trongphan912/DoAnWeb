<?php
    if(empty(session_id()))
	{
		session_start();
	}
	$index = false;
	$sanpham = false;
	$single_product = false;
	$cart = false;
	$login = false;
	$user_profile = false;
	$quanly_sanpham = false;
	$search = true;
	include("config.php");
	include_once("DB.php");
	include("../DoAnWeb/data/xu_ly_search_sanpham.php");
	include("../DoAnWeb/layout/control.php");