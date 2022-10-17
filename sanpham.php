<?php
    if(empty(session_id()))
	{
		session_start();
	}
	$index = false;
	$sanpham = true;
	$sigle_product = false;
	include("config.php");
	include("../DoAnWeb/layout/control.php");