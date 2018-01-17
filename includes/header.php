<?php require_once 'core/init.php';
		$sqlq = "select * from products where featured = 1";
		$productquery = $db->query($sqlq);
		$a=1;
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ecommerce project</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>

		<!-- navigation bar -->
				<?php
						$sql = "Select * from categories where parent = 0";
						$pquery = $db->query($sql);
				?>
	<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
		<div class="container-fluid" >
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-xs-12 col-md-2">
					<a href="./" class="navbar-brand head_brand" id="textc">Green Rock</a>
				</div>
				<div class="col-xs-12 col-md-4">
					<ul class="nav navbar-nav">
						<?php
						$pquery = $pquery->fetchAll(PDO::FETCH_ASSOC);
						foreach ($pquery as $parent) : ?>
								<?php
											$parentid = $parent['id'];
											$sql2 = "select * from categories where parent = '$parentid'";
											$pquery2 = $db->query($sql2);
								?>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="textc"><?php echo $parent['category']; ?> <span class="caret"></span></a>
							<!-- Drop down menu -->
							<ul class="dropdown-menu">
								<?php
								$pquery2 = $pquery2->fetchAll(PDO::FETCH_ASSOC);
								foreach ($pquery2 as $child) :?>
									<?php $id = $child['id']; ?>
									<li><a href="display_categorywise_products.php?id=<?= $id; ?>"><?= $child['category']; ?></a></li>
								<?php endforeach;?>
							</ul>
						</li>
					<?php endforeach;?>
						<li class="featured_tab">
							<a class="btn btn-default feat" id="textc">Featured Products</a>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<div class="search_box">
						<form action="search_result.php" method="post" autocomplete="off">
								<input class="autosuggest" type="text" name="keywords" value="">
								<span class="glyphicon glyphicon-search search-icon"></span>
					</form>
					</div>
				</div>
			</div>
		</div>
	</nav>
