<?php
$search = $_GET['search'];
$sql = "select * from product where product_name like '".urldecode($search)."' order by 'id' desc ";
$result = $mysqli -> query($sql);
$data = "";
if (mysqli_num_rows($result) != 0) {
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{    
 	$data .= '<div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="single_product.php">
                        <img class="pic-1" src="http://localhost/DoAnWeb/img/product_img/'.$row["product_image"].'">
                        <img class="pic-2" src="https://www.w3schools.com/bootstrap4/img_avatar3.png">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="single_product.php?id='.$row["id"].'">'.$row["product_name"].'</a></h3>
                    <div class="price">$16.00
                        <span>'.$row["price"].'</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>';
}
} else {
	$data .= '<div class="" style="height:800px;  width:100%; "><div class="" style="background:white; padding:20px;"><span>Xin lỗi, không có sản phẩm nào phù hợp...</span></div></div>';
}