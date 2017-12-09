<?php require_once 'core/init.php';
		$sqlq = "select * from products where featured = 1";
		$productquery = $db->query($sqlq);
		$a=1;
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ecommerce project</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/main.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	</head>
	<body>

		<!-- navigation bar -->
				<?php 
						$sql = "Select * from categories where parent = 0";
						$pquery = $db->query($sql);
				?>
	<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
		<div class="container" >
			<a href="./" class="navbar-brand" id="textc">Green Rock</a>
			<ul class="nav navbar-nav">
				<?php 
				while ($parent = mysqli_fetch_assoc($pquery)) : ?>
						<?php
									$parentid = $parent['id'];
									$sql2 = "select * from categories where parent = '$parentid'";
									$pquery2 = $db->query($sql2);
						?>
				<!-- Drop down menu -->
				<li>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="textc"><?php echo $parent['category']; ?> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<?php while ($child = mysqli_fetch_assoc($pquery2)) :?>
							<?php $url = $child['url']; ?>
							<li><a href="<?= $url; ?>"><?php echo $child['category']; ?></a></li>
						<?php endwhile;?>
					</ul>
				</li>
				<?php endwhile;?>
				<li>
					<a class="btn btn-default feat" id="textc">Featured Products</a>
				</li>
			</ul>
		</div>
	</nav>