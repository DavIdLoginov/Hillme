<?php $page = 'products'; ?>
<?php require 'blocks/head.php'; ?>
<body>
	<?php require 'blocks/header.php'; ?>

	<div class="content">
		<div class="section">
			<div class="container">
				<div class="page-header">
					<img src="images/page-title.svg" alt="">
					<h1>Products</h1>
				</div>

				<div class="breadcrumbs">
					<ul>
						<li><a href="products-classic.php">Classic</a></li>
						<li><a href="products-cyber.php">Cyber</a></li>
						<li><a href="products-galaxy.php">Galaxy</a></li>
						<li><a href="products-xstar.php">Xstar</a></li>
						<li><a href="products-lux.php" class="is-active">Lux Pod</a></li>
						<li><a href="products-bullet.php">Bullet</a></li>
						<li><a href="products-moon.php">Moon</a></li>
						<li><a href="products-air.php">Air</a></li>
					</ul>
				</div>

				<div class="product">
					<div class="product__main">
						<div class="product__slider">
							<div class="swiper">
								<div class="swiper-wrapper">
									<div class="product__slider-item swiper-slide" data-hash="L004">
										<div class="product-item">
											<div class="product-item__content">
												<div class="product__breadcrumbs breadcrumbs">
													<ul>
														<li><a href="index.php">Hillme</a></li>
														<li><a href="products-classic.php">Products</a></li>
														<li>Lux</li>
													</ul>
												</div>
												<h2 class="product-item__title">Lux Pod 6500</h2>
												<div class="product-item__data">
													<div class="product-item__data-row">
														<div class="product-item__data-title">Puffs</div>
														<div class="product-item__data-desc">up to 6500.</div>
													</div>
													<div class="product-item__data-row">
														<div class="product-item__data-title">Nicotine</div>
														<div class="product-item__data-desc">0-2-4-5%</div>
													</div>
													<div class="product-item__data-row">
														<div class="product-item__data-title">Battery</div>
														<div class="product-item__data-desc">500 mAh</div>
													</div>
													<div class="product-item__data-row">
														<div class="product-item__data-title">Charging Port</div>
														<div class="product-item__data-desc">Type-C</div>
													</div>
												</div>
											</div>
											<div class="product-item__aside">
												<div class="product-item__image">
													<div class="product-image">
														<div class="product-image__circle"></div>
														<div class="product-image__main">
															<div class="product-image__blur">
																<img src="images/products/LuxPod6500.png" />
															</div>
															<img src="images/products/LuxPod6500.png" />
														</div>
													</div>
												</div>
												<div class="product-item__btn-row">
													<a href="partner.php#become-partner" class="product-item__btn btn btn_black btn_round">Order now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="product__thumbs">
						<div class="product__thumbs-slider">
							<div class="swiper">
								<div class="swiper-wrapper">
									<div class="product__thumbs-slider-item swiper-slide">
										<div class="product-thumb">
											<div class="product-thumb__image">
												<div class="product-thumb__blur">
													<img src="images/products/LuxPod6500_thumb.png" />
												</div>
												<img src="images/products/LuxPod6500_thumb.png" />
											</div>
											<div class="product-thumb__title">Lux Pod 6500</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>

			<?php require 'blocks/find-us.php'; ?>
		</div>
	</div>

	<?php require 'blocks/footer.php'; ?>
	<?php require 'blocks/svg-sprite.php'; ?>
	<?php require 'blocks/foot.php'; ?>
</body>
</html>