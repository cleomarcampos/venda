<?php require_once("header.php"); ?>
<center>
	<h3>
		LISTA DE CAMINHÕES
	</h3>
</center>
<?php foreach ($listTruck as $key => $s) {
	echo $key. $s['title'];
} ?>
<center>
	<h3> 
		LISTA DE CARROS
	</h3>
</center>
<?php foreach ($listCar as $value): ?>
<p><?php echo $value['id']; ?></p>
<p><?php echo $value['brand']; ?></p>
<p><?php echo $value['title']; ?></p>
<p><?php echo $value['content']; ?></p>
<p><?php echo $value['status']; ?></p>
<p><?php echo $value['price']; ?></p><br><br>
<?php endforeach; ?>
