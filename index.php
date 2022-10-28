<?php
    if(empty(session_id()))
	{
		session_start();
	}
	$index = true;
	$sanpham = false;
	$single_product = false;
	$cart = false;
	$login = false;
	$user_profile = false;
	include("config.php");
	include_once("DB.php");
	include("../DoAnWeb/data/xu_ly_slide_sp_moi.php");
	include("../DoAnWeb/layout/control.php");