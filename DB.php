<?php
	$host = 'localhost';
	$dbname = 'test';
	$us = 'root';
	$pass = '';
	$mysqli = new mysqli($host,$us,$pass,$dbname);

	// Check connection
	if ($mysqli -> connect_errno) {
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	  exit();
	}