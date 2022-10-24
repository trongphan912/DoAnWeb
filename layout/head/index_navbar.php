<?php
?>

    <style>
        /* Show it is fixed to the top */
        body {
          min-height: 75rem;
          padding-top: 4.5rem;
        }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <a class="navbar-brand" href="index.php"><img style="height: 80px;" src="<?php echo logo."logo.png";?>"/></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" id="home_page" href="index.php">TRANG CHỦ <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="product_page" href="sanpham.php">SẢN PHẨM</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="cart_page" href="cart.php">GIỎ HÀNG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="login_page" href="login.php">ĐĂNG NHẬP</a>
              </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
    </nav>
    <script type="text/javascript">
      $( document ).ready(function() {
          if (window.location.href.indexOf('index.php') != -1) {
              var element = document.getElementById("home_page");
              element.classList.add("active");
          } else if (window.location.href.indexOf('sanpham.php') != -1) {
              var element = document.getElementById("product_page");
              element.classList.add("active");
          } else if (window.location.href.indexOf('single_product.php') != -1) {
              var element = document.getElementById("product_page");
              element.classList.add("active");
          }  else if (window.location.href.indexOf('cart.php') != -1) {
              var element = document.getElementById("cart_page");
              element.classList.add("active");
          }  else if (window.location.href.indexOf('login.php') != -1) {
              var element = document.getElementById("login_page");
              element.classList.add("active");
          }
        });
    </script>
<?php