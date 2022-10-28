<?php
?>
<div class="container text-center">
	<section class="my-5 bg-dark">
	<div class="container">
	<div class="col-xl-12">
	<h2 class="text-center text-white">Sản phẩm Mới</h2>
	</div>
	
		<div id="carouselFourColumn" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
			<li data-target="#carouselFourColumn" data-slide-to="0" class="active"></li>
			<li data-target="#carouselFourColumn" data-slide-to="1"></li>
			<li data-target="#carouselFourColumn" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
			<div class="carousel-item active">
				<div class="row">
				  
				<?php echo $data_1; ?>

				</div>
			</div>
			<div class="carousel-item">
				<div class="row">
				  
				  <?php echo $data_2; ?>
			
				</div>
			</div>
			<div class="carousel-item">
				<div class="row">
				  
				  <?php echo $data_3; ?>
			
				</div>
			</div>
			</div>
		  <a class="carousel-control-prev" href="#carouselFourColumn" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselFourColumn" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
		</div>	
	</section>
</div>
<?php