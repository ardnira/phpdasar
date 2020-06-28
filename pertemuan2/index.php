

<!DOCTYPE html>
<html>
<head>
	<title>    aaaaa yaaa</title>
</head>
<br>headddddd oooo
<body>
	<style>
		.kotak{
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height:50px;  
			margin: 3px;
			transition: 5s;
			float: left;
		}
		.kotak:hover{
			transform: rotate(360deg);
			border-radius: 50%;
		}

	</style>
  
<?php  
$angka=[1,2,3,5,6,7,8,9];
// $angka =[11,42];
?>

<?php foreach ($angka as $a) : ?>
	<div class="kotak"><?= $a; ?> </div>
<?php endforeach; ?>

</body>
</html>

<?php
$nama="indra fatih";
//latihan saja

// print "saya dindsdddra ari ";
 
?>
