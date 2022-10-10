<?php
    if(empty(session_id()))
	{
		session_start();
	}
	$index = true;
	include("config.php");
	include("../DoAnWeb/layout/control.php");