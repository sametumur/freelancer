<!-- Footer -->
<footer class="text-center">
	<div class="footer-above">
		<div class="container">
			<div class="row">
				<div class="footer-col col-md-4">
					<h3>Location</h3>
					<p>
						<?php echo cs_get_option( 'mail' ); ?>
							<br>
						<?php echo cs_get_option( 'location' ); ?>
					</p>
				</div>
				<div class="footer-col col-md-4">
					<h3>Around the Web</h3>
					<ul class="list-inline">
						<?php if (cs_get_option( 'facebook' ) == true) : ?>
						<li>
							<a href="<?php echo cs_get_option( 'facebook' ); ?>" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
						</li>
						<?php endif; ?>
						<?php if (cs_get_option( 'g_plus' ) == true) : ?>
						<li>
							<a href="<?php echo cs_get_option( 'g_plus' ); ?>" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
						</li>
						<?php endif; ?>
						<?php if (cs_get_option( 'twitter' ) == true) : ?>
						<li>
							<a href="<?php echo cs_get_option( 'twitter' ); ?>" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
						</li>
						<?php endif; ?>
						<?php if (cs_get_option( 'linkedin' ) == true) : ?>
						<li>
							<a href="<?php echo cs_get_option( 'linkedin' ); ?>" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
						</li>
						<?php endif; ?>
					</ul>
				</div>
				<div class="footer-col col-md-4">
					<h3>About Freelancer</h3>
					<p><?php echo cs_get_option( 'low_desc' ); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-below">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					Copyright &copy; Freelancer <?php echo date('Y') ?>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
	<a class="btn btn-primary" href="#page-top">
		<i class="fa fa-chevron-up"></i>
	</a>
</div>
<!-- Portfolio Modals -->
	<?php
	$portfolio_args = array(
		'post_type'         => 'portfolio',
		'post_status'       => 'publish',
		'orderby'           => 'meta_value',
		'order'             => 'DESC',
		'posts_per_page'    => -1
	);
	foreach (query_posts( $portfolio_args ) as $portfolio) :
		$title = get_post_meta( $portfolio->ID, '_freelancer_portfolio_thumbnail', true );
		$desc = get_post_meta( $portfolio->ID, '_freelancer_portfolio_desc', true );
		$image = get_post_meta( $portfolio->ID, '_freelancer_portfolio_thumbnail', true );
		$positon = get_post_meta( $portfolio->ID, '_freelancer_portfolio_position', true );
		?>
<div class="portfolio-modal modal fade" id="portfolio-<?php echo $portfolio->ID ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2><?php echo $portfolio->post_title; ?></h2>
						<hr class="star-primary">
						<img src="<?php echo $image; ?>" class="img-responsive img-centered" alt="">
						<p><?php echo $desc; ?></p>
						<ul class="list-inline item-details">
							<li>Yazan:
								<strong><a href="<?php echo get_home_url() ?>"><?php echo cs_get_option( 'name' ); ?></a>
								</strong>
							</li>
							<li>Görevi:
								<strong><a href="<?php echo get_home_url() ?>"><?php echo $positon; ?></a>
								</strong>
							</li>
						</ul>
						<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endforeach; ?>
<?php wp_footer(); ?>
<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
</body>
</html>