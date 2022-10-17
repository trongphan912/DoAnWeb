<?php
    if(empty(session_id()))
	{
		session_start();
	}
	$index = false;
	$sanpham = false;
	$single_product = false;
	$cart = true;
	include("config.php");
	include("../DoAnWeb/layout/control.php");