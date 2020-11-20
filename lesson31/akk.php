<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #F5FFFA">
	<?php
		$con = mysqli_connect('127.0.0.1', 'root','','lesson31');
		$query = mysqli_query($con, "SELECT * FROM kickstarter WHERE user='LikeWalker'");
	?>
	
<div style="background-color: white;" class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="index.php" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href="index.php"><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
	<div style="height: 200px; background-color: ;" class="col-6 mx-auto mt-3">
		<form method="GET" action="add.php">
			<input height="" class="col-12 rounded" type="" placeholder="Заголовок" name="title">
			<input height="" class="col-12 rounded mt-1" type="" placeholder="Описание" name="description">
			<input height="" class="col-12 rounded mt-1" type="" placeholder="Необходимая сумма" name="goal">
			<input height="" class="col-12 rounded mt-1" type="" placeholder="Обложка" name="img">
			<input height="" class="col-12 rounded mt-1" type="" placeholder="Город" name="place">
			<input height="" class="col-12 rounded mt-1" type="" placeholder="Пользователь" name="user">
			<button style="height: 35px;" class="col-12 bg-success rounded text-white mt-1">Добавить</button>
		</form>
	</div>
	<div class="col-10 mx-auto" style="text-align: left; margin-top: 20px;">
		<h1 style="margin-top: 70px;" class="">My projects</h1>
		<?php 
	 			//цикл начинается
					for($i=0; $i< $query->num_rows ;$i++){
					$stroka = $query->fetch_assoc();
		?>
		<div class="col-12 py-2 pl-0 pr-0">  <!--текстовые элементы поста-->
			<div class="text-center">
				<h1><?php echo $stroka["title"];
				?></h1>
			</div>
			<div class="text-center">
				<p><?php echo $stroka["description"];
				?></p>
			</div>
		<div class="row">
			<div class="col-9" style="height: 500px; background-image: url(<?php
						echo $stroka["img"];
						?>); background-size: 100% 100%"> <!--картинка поста-->
			</div>
			<div class="col-2 ml-3">
				<div>
					<p class="text-success">Собрано</p>
				</div>
				<div>
					<h1 class="text-success"><?php echo $stroka["donated"];
					?></h1>
				</div>
				<div>
					<p class="text-secondary">Необходимо</p>
					<h4><?php echo $stroka["goal"];
					?></h4>
				</div>
				<div>
					<form action="redact.php" method="GET">
						<input style="display: none;" type="" name="delete" value="<?php echo $stroka["id"]
						?>">
						<button style="height: 35px;" class="col-12 rounded bg-success text-white">Редактировать</button>
					</form>
				</div>
				<div class="mt-1">
					<form action="delete.php" method="GET">
						<input style="display: none;" type="" name="delete" value="<?php echo $stroka["id"]
						?>">
						<button style="height: 35px;" class="col-12 rounded bg-danger text-white">Удалить проект</button>
					</form>
				</div>
			</div>
		</div>
		<div>
			<p class="text"><?php
				echo $stroka["text"];
			?></p>
		</div>
		<form class="form-redact" style="display: none;" action="redact.php" method="GET">
			<input class="text-input" type="" name="text" value="<?php
				echo $stroka["text"];
			?>">
			<button class="button-save">Подтвердить</button>
		</form>
		</div>
		<?php
		}
		?>
	</div>
</body>
</html>