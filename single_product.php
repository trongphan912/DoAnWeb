<?php
    if(empty(session_id()))
	{
		session_start();
	}
	$index = false;
	$sanpham = false;
	$single_product = true;
	$cart = false;
	$login = false;
	include("config.php");
	include_once("DB.php");
	include("../DoAnWeb/data/xu_ly_chitiet_sanpham.php");
	include("../DoAnWeb/layout/control.php");