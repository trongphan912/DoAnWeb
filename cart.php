<?php
    if(empty(session_id()))
	{
		session_start();
	}
	$index = false;
	$sanpham = false;
	$single_product = false;
	$cart = true;
	$login = false;
	$user_profile = false;
	$quanly_sanpham = false;
	include("config.php");
	include("../DoAnWeb/layout/control.php");