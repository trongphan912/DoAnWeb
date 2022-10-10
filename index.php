<?php
    if(empty(session_id()))
	{
		session_start();
	}
	$index = true;
	include("config.php");
	include("../DoAn/layout/control.php");
