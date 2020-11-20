<?php
	$connect = mysqli_connect("127.0.0.1","root","","lesson31");
	$text_zaprosa_vstavit = "DELETE FROM kickstarter WHERE id = '{$_GET["delete"]}'";
	$zapros_dlya_vvoda = mysqli_query($connect, $text_zaprosa_vstavit); //для ввода в таблицу
	header('Location: akk.php');
?>