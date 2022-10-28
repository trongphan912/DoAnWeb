<?php
$sql = "select * from product where 1 = 1 order by 'id' desc limit 12";
$result = $mysqli -> query($sql);
$data_1 ="";
$data_2 ="";
$data_3 ="";
$counter = 1;
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{    
  if ($counter <= 4) {
      $data_1 .= '   
          <div class="col-xl-3 p-1">  
            <div class="card">
              <img src="http://localhost/DoAnWeb/img/product_img/'.$row["product_image"].'" class="w-100">
              <div class="card-body">
              <h5 class="card-title">'.$row["product_name"].'</h5>
              <p class="card-text">'.$row["product_mota"].'</p>
              <a href="single_product.php?id='.$row["id"].'" class="btn btn-outline-success w-100">Show</a>
              </div>
            </div>
          </div>
      ';
      $counter = $counter + 1;
    } elseif ($counter <= 8) {
      $data_2 .= '     
          <div class="col-xl-3 p-1">  
            <div class="card">
              <img src="http://localhost/DoAnWeb/img/product_img/'.$row["product_image"].'" class="w-100">
              <div class="card-body">
              <h5 class="card-title">'.$row["product_name"].'</h5>
              <p class="card-text">'.$row["product_mota"].'</p>
              <a href="single_product.php?id='.$row["id"].'" class="btn btn-outline-success w-100">Show</a>
              </div>
            </div>
          </div>
      ';
      $counter = $counter + 1;
    } elseif ($counter <= 12) {
      $data_3 .= '     
          <div class="col-xl-3 p-1">  
            <div class="card">
              <img src="http://localhost/DoAnWeb/img/product_img/'.$row["product_image"].'" class="w-100">
              <div class="card-body">
              <h5 class="card-title">'.$row["product_name"].'</h5>
              <p class="card-text">'.$row["product_mota"].'</p>
              <a href="single_product.php?id='.$row["id"].'" class="btn btn-outline-success w-100">Show</a>
              </div>
            </div>
          </div>
      ';
      $counter = $counter + 1;
    }
}
