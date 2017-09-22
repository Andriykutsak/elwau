<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>сторінка адміністратора</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="">
</head>
<body>
<div class="main">
	<div class="row head">
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html"> <div class="col-sm-3"><img src="img/logo.jpg" alt=""></div></a>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-right">
						<li><a href="/php/users.php">коритсувачі</a></li>
						<li><a href="/php/commodity.php">товар</a></li>
						<li><a href="/php/statistics.php">статистика</a></li>
						</ul>
						
					
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</div>
		<div class="row">
			<div class="container">
				<div class="uploading-conent">
					<h2 class="text-center">завантаження товару для магазину</h2>
					<form action="">
													<select name="" id="">
														<option value="cars">Автомодели</option>
														<option value="planes">Самолеты</option>
														<option value="helicopter">Вертолеты</option>
														<option value="battarey">Акамуляторы,кабели</option>
														<option value="equipment">Апаратура</option>
														<option value="materials">Инструменты,материалы</option>
														<option value="parts">Венты,Крепеж,Клей</option>
														<option value="engne">Двигатели ДВС</option>
														<option value="electroEngine">Електродвигатели</option>
														<option value="ships">Катера, яхты</option>
													</select>
													<input type="text" placeholder="імя товару" name>
													<input type="text" placeholder="Тип двигуна" name>
													<input type="text" placeholder="час роботи" name>
													<input type="text" placeholder="ціна" name>
													<input type="text" placeholder="тип шассі" name>
													<select name="commodity type" id="">
														<option value="slider"></option>
														<option value="cale"></option>
														<option value="hits"></option>
													</select>
													<input type="text" placeholder="" name>
													<input type="text" placeholder="" name>
													<textarea name="description" id="" placeholder="Ведіть опис товару"cols="30" rows="10"></textarea>
												</form>							
				</div>
			</div>
		</div>
	</div>
</div>












	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
</body>
</html>