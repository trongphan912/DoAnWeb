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
	$user_profile = true;
	include("config.php");
	include("../DoAnWeb/layout/control.php");