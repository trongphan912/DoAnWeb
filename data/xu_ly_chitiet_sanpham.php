<?php 
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