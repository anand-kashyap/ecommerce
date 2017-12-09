<div class="modal fade details-<?php echo $a;?>" id="details-<?php echo $a;?>" tabindex="-1" role="dialog" aria-labelledby="details-<?php echo $a; $a++; ?>" aria-hidden="true" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title text-center"><?= $product['title']; ?></h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<div class="center-block">
							<img src="<?= $product['image']; ?>" alt="<?= $product['title']; ?>" class="details img-responsive">
							</div>
						</div>
						<div class="col-sm-6">
							   <h4>Details</h4><p><?= $product['description']; ?></p>
								<hr/>
							   <p>Price: $<?= $product['price']; ?></p>

							   <?php
							   		$brand_id = $product['brand'];
							   $sqlq2 = "select products.brand, brand.brand as br from products INNER JOIN brand ON brand.id = '$brand_id'";
								$brandquery = $db->query($sqlq2);?>
								<?php $brand = mysqli_fetch_assoc($brandquery) ?>
							   <p>Brand: <?=$brand['br']?></p>
							   <form action="add_cart.php" method="post">
							   	<div class="form-group inputqs">
							   		<div class="col-xs-3">
							   			<label for="quantity" id="qty-label">Quantity: </label>
							   			<input type="text" value="1" class="form-control" id="quantity" name="quantity">
							   			</div>
							   		<div class="col-xs-3">
							   			<label for="Size" id="size-label">Size: </label>
							   			<select class="form-control" name="Size" id="size">
							   				<option value=""></option>
							   				<option value="S">S</option>
							   				<option value="M">M</option>
							   				<option value="L">L</option>
							   				<option value="XL">XL</option>
							   			</select>
							   		</div>
							   	</div>
							   </form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</button>
			</div>
		</div>
	</div>
</div>