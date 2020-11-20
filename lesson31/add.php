<?php
	$connect = mysqli_connect("127.0.0.1","root","","lesson31");
	$text_zaprosa_vstavit = "INSERT INTO kickstarter (title, description, goal, img, user, place) VALUES ('{$_GET["title"]}', '{$_GET["description"]}', '{$_GET["goal"]}', '{$_GET["img"]}', '{$_GET["user"]}', '{$_GET["place"]}')" ;
	$zapros_dlya_vvoda = mysqli_query($connect, $text_zaprosa_vstavit);

	header('Location: akk.php');
?>