<?php include 'includes/header.php'; ?>
<?php $sqls = "Select * from products where categories = 3";
	  $shirtquery = $db->query("$sqls");
	  $a = 1;
 ?>
 <div class="col-md-12">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="row">
			<h2 class="text-center">Mens' Shirts</h2>
				<?php while ($product = mysqli_fetch_assoc($shirtquery)) : ?>
					<div class="col-md-3">
						<h4><?= $product['title']; ?></h5>
						<img src="<?= $product['image']; ?>" alt="<?= $product['title']; ?>" id="images">
						<p class="list-price text-danger">List Price: $<s><?= $product['list_price']; ?></s></p>
						<p class="price">Our price: $<?= $product['price']; ?></p>
						<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#details-<?php echo $a; ?>">Details</button>
					</div>
				<?php include 'details-num.php';?>
				<?php endwhile; ?>

		</div>
	</div>
	</div>
<?php include 'includes/footer.php'; ?>
