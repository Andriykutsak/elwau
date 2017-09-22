<?php 
include "db.php";
$CommName=mysqli_query($db,"SELECT * FROM `commodity`");



 ?>

<div class="commodity">
	<div class="slider">
		<div id="carousel-id" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-id" data-slide-to="0" class=""></li>
				<li data-target="#carousel-id" data-slide-to="1" class=""></li>
				<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
			</ol>
			<div class="carousel-inner">
			<?php 
			foreach ($variable as $key => $value) {
				?>
			<div class="item">
			<!--commodity description-->
				<div class="col-sm-6">
					<h2 class="text-left comm-name"><<?php $CommName?></h2>
					<div class="commodity-wrap">
						<div class="type"><?php $type ?></div>
						<div class="chasiss"><?php $chasiss ?></div>
						<div class="engine"><?php $engine ?></div>
						<div class="work-time"><?php $engine ?></div>
						<div class="price">Цена: <?php $price ?> рублей</div>
						<div class="buscet">в корзину<div class="tringle"></div></div>

					</div>
				</div>
				<!--commodity image-->
				<div class="col-sm-6">
					<?php 
						echo "<img src='$img'>";
					 ?>
				</div>
			</div>

				<?php
			}
			 ?>
	
			
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div>

</div>