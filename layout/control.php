<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php include('DuongDan/index_link.php'); ?>
</head>
<body>
<?php
// header
	include("layout/head/index_navbar.php");
// end-header
if ($index == true) {
// body
	include("layout/body/slide_dau_trang_chu.php");
	include("layout/body/feature_trang_chu.php");
	include("layout/body/new_product_trang_chu.php");
	include("layout/body/product_3col_trang_chu.php");
// end-body
} elseif ($sanpham == true) {
	include("layout/body/card_sanpham.php");
} elseif ($single_product == true) { 
	include("layout/body/chitiet_sanpham.php");
} elseif ($cart == true) { 
	include("layout/body/cart_layout.php");
} elseif ($login == true) { 
	include("layout/body/login.php");
} elseif ($user_profile == true) { 
	include("layout/body/user_profile.php");
} elseif ($quanly_sanpham == true) { 
	include("layout/body/quanly_sanpham.php");
} elseif ($search == true) {
	include("layout/body/card_sanpham.php");
}
// footer
	include("layout/footer/footer.php");
// end-footer
?>
</body>
</html>
<?php