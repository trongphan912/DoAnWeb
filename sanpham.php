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
	include("config.php");
	include("../DoAnWeb/layout/control.php");