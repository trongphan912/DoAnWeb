<?php 
if (isset($_POST['capnhat_sanpham'])) {
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
	$product_mota = $_POST['product_mota'];
	$product_name = $_POST['product_name'];
	$price = $_POST['price'];
	$id_sanpham = $_POST['id_sanpham'];
	$sql = "UPDATE product SET product_mota = '".$product_mota."', product_name = '".$product_name."', price = '".$price."'WHERE id = ".$id_sanpham;
	$result = $mysqli -> query($sql);
	if ($result) {
	  echo "Cập nhật sản phẩm thành công!";
	} else {
	  echo "Error updating record: " . $mysqli->error;
	}

} elseif (isset($_POST['xoa_sanpham'])) {
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
		$id_sanpham = $_POST['id_sanpham'];
		$sql = "UPDATE product SET product_status = '1' WHERE id = ".$id_sanpham;
		$result = $mysqli -> query($sql);
		if ($result) {
		  echo "Ẩn sản phẩm thành công!";
		} else {
		  echo "Error updating record: " . $mysqli->error;
		}
} elseif (isset($_POST['khoiphuc_sanpham'])) {
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
		$id_sanpham = $_POST['id_sanpham'];
		$sql = "UPDATE product SET product_status = '0' WHERE id = ".$id_sanpham;
		$result = $mysqli -> query($sql);
		if ($result) {
		  echo "Khôi phục sản phẩm thành công!";
		} else {
		  echo "Error updating record: " . $mysqli->error;
		}
} else {
	$id_sanpham = $_GET["id"];
	$sql = "select * from product where id = '".$id_sanpham."'";

	$result = $mysqli -> query($sql);
	// Associative array
	$row = $result -> fetch_array(MYSQLI_ASSOC);
	$product_name = $row["product_name"];
	$price= $row["price"];
	$product_mota = $row["product_mota"];
	$product_image = $row["product_image"];
	//$row["Age"]);

	// Free result set
	$result -> free_result();

	$mysqli -> close();
}