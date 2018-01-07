<?php include 'includes/header.php'; ?>
	<div id="back_img">
		<div id="image1"></div>
	</div>
	<div class="col-md-12">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="row feat1">
			<h2 class="text-center">Featured Products</h2>
				<?php
				$productquery = $productquery->fetchAll(PDO::FETCH_ASSOC);
				foreach ($productquery as $product) : ?>
					<div class="col-md-3">
						<h5><?= $product['title']; ?></h5>
						<img src="<?= $product['image']; ?>" alt="<?= $product['title']; ?>" id="images">
						<p class="list-price text-danger">List Price: $<s><?= $product['list_price']; ?></s></p>
						<p class="price">Our price: $<?= $product['price']; ?></p>
						<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#details-<?php echo $a; ?>">Details</button>
					</div>
				<?php include 'details-num.php';?>
			<?php endforeach; ?>

		</div>
	</div>
	</div>
<?php include 'includes/footer.php'; ?>
