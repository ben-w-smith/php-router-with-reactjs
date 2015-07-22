<?php
$path = getcwd() . '/media/';
$categories = array_diff(scandir($path, 0), array('.', '..'));
?>

<div class="row cards category">
	<h4>Categories</h4>
	<div class="category-wrapper">
		<div class="grid">
			<?php foreach($categories as $category) : ?>
				<?php if(is_dir($path . $category)) : ?>
					<div class="grid-item col s12 m6 l4">
						<a href="<?php echo '/portfolio/' . $category; ?>">
							<div class="card hoverable">
								<div class="card-image">
									<img src="/portfolio/assets/images/preloader-bg.gif" data-src="<?php echo '/portfolio/media/' . $category . '/' . 'category-thumb.png'; ?>">
									<span class="card-title"><?php echo ucwords(str_replace("-", " ", $category)); ?></span>
								</div><!-- .card-image -->
							</div><!-- .card -->
						</a>
					</div><!-- .col .s12 m6 l4 -->
				<?php endif; ?>
			<?php endforeach; ?>
		</div><!-- .grid -->
	</div><!-- .category-wrapper -->
</div><!-- .row -->


