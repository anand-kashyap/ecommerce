<?php include 'includes/header.php'; ?>
<?php
$id = $_GET['id'];
$sqls = "Select * from products where categories = {$id}";
	  $pantquery = $db->query("$sqls");
	  $a = 1;
 ?>
 <div class="col-md-12">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="row">
			<?php $sqlq2 = "select category as cat, parent from categories where id = '{$id}'";
						$sqlq2 = $db->query("$sqlq2");
						$sqlq2 = $sqlq2->fetch(PDO::FETCH_ASSOC);
						$parentid = $sqlq2['parent']; //get parent id
						$category = $sqlq2['cat'];  //get product-category name e.g-shirts,jeans etc

						$sqlq2 = "select category as cat from categories where id = '{$parentid}'";
						$sqlq2 = $db->query("$sqlq2");
						$sqlq2 = $sqlq2->fetch(PDO::FETCH_ASSOC);
						$parent_name = $sqlq2['cat'];  //get parent name e.g.-men, women etc

			?>
			<h2 class="text-center"><?= $parent_name;?>'s <?= $category; ?></h2>
				<?php
				$pantquery = $pantquery->fetchAll(PDO::FETCH_ASSOC);
				foreach ($pantquery as $product) : ?>
					<div class="col-md-3">
						<h4><?= $product['title']; ?></h5>
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
