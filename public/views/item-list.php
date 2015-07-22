<?php

// grab all files within category sperated by year
$url = array_diff(explode("/",$_SERVER["REQUEST_URI"]), array(''));
$category = strtolower(array_pop($url));

$path = getcwd() . '/media/' . $category;

// Get year directories
$years = array_pref_diff(scandir($path, 1), '/^\.|-thumb/');

// Get file list
$thumbs = array();
foreach($years as $year) {
	if(is_dir( $path . '/' . $year)) {
		$files = array_pref_diff(scandir($path . '/' . $year, 0), '/^\.|-thumb/');
		$tmp = array('year' => $year, 'file' => $files);
		array_push($thumbs, $tmp);
	}
}

// Array diff with a regular expression
function array_pref_diff($a, $p) {
	foreach($a as $i => $v) {
		if(preg_match($p, $v)) {
			unset($a[$i]);
		}
	}
	return $a;
}

?>

<div class="row <?php echo $category; ?>">
	<div class="filters">
		<h4>Filters</h4>
		<div class="category-wrapper">
			<div class="col s3 m1"><button class="btn filter all active waves-effect waves-light" value="*">All</button></div>
			<?php foreach($thumbs as $year): ?>
				<?php
				if(!empty($year['file'])) {
					$disabled = false;
				} else {
					$disabled = true;
				}
				?>
				<div class="col s3 m1"><button class="btn filter waves-effect waves-light <?php echo ($disabled ? 'disabled' : ''); ?>" value=".year-<?php echo $year['year']; ?>"><?php echo $year['year']; ?></button></div>
			<?php endforeach; ?>
			<div class="clearfix"></div>
		</div><!-- .category-wrapper -->
	</div><!-- .filters -->

	<?php foreach($thumbs as $dir) : ?>
		<?php if(!empty($dir['file'])) : ?>
			<div id="<?php echo $dir['year']; ?>" class="year">
				<h5><?php echo $dir['year']; ?></h5>
				<div class="category-wrapper">
					<div class="grid">
						<?php foreach($dir['file'] as $file) : ?>
							<?php 
								preg_match('/[^\.]+$/i', $file, $type);
								$type = $type[0];
							?>
							<?php $file = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file); ?>
							<div class="grid-item year-<?php echo $dir['year']; ?> col s12 m6 l3">
								<a href="<?php echo '/portfolio/' .  $category . '/' . $dir['year'] . '/' . $file; ?>">
									<div class="card hoverable">
										<div class="card-image">
											<img src="/portfolio/assets/images/preloader-bg.gif" data-src="<?php echo '/portfolio/media/' . $category . '/' . $dir['year'] . '/' . $file . '-thumb.png'; ?>" class="year-<?php echo $dir['year']; ?>">
											<div class="valign-wrapper">
												<i class="material-icons large"><?php echo ( strcmp($type, 'mp4') ? 'zoom_in' : 'play_circle_outline' ); ?></i>
											</div>
										</div><!-- .card-image -->
									</div><!-- .card -->
								</a>
							</div><!-- .col .s12 .m6 .l4 -->	
						<?php endforeach; ?>
					</div><!-- .grid -->
					<div class="clearfix"></div>
				</div><!-- .category-wrapper -->
			</div><!-- #year -->
		<?php endif; ?>
	<?php endforeach; ?>

</div><!-- .category -->


