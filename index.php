<?php
    if(empty(session_id()))
	{
		session_start();
	}
	$index = true;
	$sanpham = false;
	$sigle_product = false;
	include("config.php");
	include("../DoAnWeb/layout/control.php");