<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #F5FFFA;">
	<?php
		$con = mysqli_connect('127.0.0.1', 'root','','lesson31');
		$query = mysqli_query($con, "SELECT * FROM kickstarter");
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
			<a href="akk.php"><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-10 mx-auto">
	<h4 class="">Explore <span class="text-success font-weight-bold"><!--Вывести количество проектов--></span></h4>
	<p></p>
	<div class="row mt-5">
	<?php 
		//цикл начинается
		for($i=0;$i< $query->num_rows;$i++){
		$stroka = $query->fetch_assoc();
	?>
		<div class="col-4">
			<div style="height: 300px; background-size: 100% 100%; background-image: url(<?php echo $stroka["img"];
				?>);">">
					
			</div>
				<p><?php echo $stroka["title"];?></p>
				<p><?php echo $stroka["description"];?></p>
				<p>by: <?php echo $stroka["user"], $stroka[ "place" ];?></p>
				<p><?php echo $stroka["goal"]?>$ goal</p>
				<p style="color: green;"><?php echo $stroka["donated"]?>$ donated</p>
			<form method="GET" action="updateDonate.php">
				<input style="display: none;" value="<?php echo $stroka["id"]?>" type="" name="id">
				<button style="height: 50px; background-color: green; color: white;">Donate +10$</button>
			</form>
			
		</div>
	<?php
		}
	?>
	</div>
</div>
</body>
</html>