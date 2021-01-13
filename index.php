<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	echo 'hello';
	echo 'WORLD';
?>
<br>
	<?php
	echo 9+5+4;
?>
<br>
<?php 
if (mt_rand(0,1)){
 ?>
 <div style='color: blue'>СИНИЙ ТЕКСТ</div>
<?php
} else {
?>
<div style='color:red'>КРАСНЫЙ ЦВЕТ</div>
<?php	
}
?>

</body>
</html>