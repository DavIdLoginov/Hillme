<?php $page = 'contacts'; ?>
<?php require 'blocks/head.php'; ?>
<body>
	<?php require 'blocks/header.php'; ?>

	<div class="content">
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 order-lg-1">
						<div class="page-name">
							<div class="page-name__inner">FEEDBACK</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="page-header">
							<img src="images/page-title.svg" alt="">
							<h1>Contacts</h1>
						</div>

						<div class="aside aside_contacts">
							<div class="aside__item">
								<div class="aside__item-title">Address:</div>
								<div class="aside__item-text"><strong>+861881095851</strong></div>
							</div>

							<div class="aside__item">
								<div class="aside__item-title">Telephone:</div>
								<div class="aside__item-text"><strong>+861881095851</strong></div>
							</div>

							<div class="aside__item">
								<div class="aside__item-title">Emails:</div>
								<div class="aside__item-text">
									<strong>Marketing E-mail:</strong>
									<span>@861881095851</span>
								</div>
								<div class="aside__item-text">
									<strong>Distribution E-mail:</strong>
									<span>@861881095851</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-7">
						<div class="contacts-form-wrapper">
							<form class="contacts-form" action="blocks/form-handler.php">
								<div class="row">
									<div class="col-sm-5">
										<div class="form-group">
											<label class="form-label"><span class="color-red">*</span> Name</label>
											<div class="form-field">
												<input type="text" class="form-control" name="name" required placeholder="Enter your full name...">
											</div>
										</div>
									</div>

									<div class="col-sm-7">
										<div class="form-group">
											<label class="form-label"><span class="color-red">*</span> Phone</label>
											<div class="form-field">
												<input type="text" class="form-control" name="phone" required placeholder="Enter your phone...">
											</div>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="form-label">Email</label>
									<div class="form-field">
										<input type="email" class="form-control" name="email" value="ABc1234567@gmail.com" placeholder="Enter your email...">
									</div>
								</div>

								<div class="form-group">
									<div class="form-textarea form-textarea_2">
										<div class="form-textarea__bg"></div>
										<label class="form-textarea__content">
											<textarea class="form-control" name="message" rows="2" placeholder="Message content..."></textarea>
										</label>
										<div class="form-textarea__footer">
											<button type="submit" class="btn btn_arrow">
												<svg class="icon" width="38" height="15"><use xlink:href="#icon-btn-arrow-lg"></use></svg>
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php require 'blocks/footer.php'; ?>
	<?php require 'blocks/svg-sprite.php'; ?>
	<?php require 'blocks/foot.php'; ?>
</body>
</html>