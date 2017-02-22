<?php get_header(); ?>

<body id="page-top" class="index">
<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="#page-top"><?php echo cs_get_option( 'name' ); ?></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="hidden">
					<a href="#page-top"></a>
				</li>
				<li class="page-scroll">
					<a href="#portfolio">Portfolio</a>
				</li>
				<li class="page-scroll">
					<a href="#about">About</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>
<!-- Header -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php
					if(cs_get_option( 'maskot' ) == true){
						$maskot = cs_get_option( 'maskot' );
					} else {
						$maskot = get_theme_file_uri( 'assets/img/profile.png' );
					}
				?>
				<img class="img-responsive" src="<?php echo $maskot; ?>" alt="">
				<div class="intro-text">
					<span class="name"><?php echo cs_get_option( 'name' ); ?></span>
					<hr class="star-light">
					<span class="skills"><?php echo cs_get_option( 'position' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Portfolio Grid Section -->
<section id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Portfolio</h2>
				<hr class="star-primary">
			</div>
		</div>
		<div class="row">
			<?php
			$portfolio_args = array(
				'post_type'         => 'portfolio',
				'post_status'       => 'publish',
				'orderby'           => 'meta_value',
				'order'             => 'DESC',
				'posts_per_page'    => -1
			);
			foreach (query_posts( $portfolio_args ) as $portfolio) : ?>
			<div class="col-sm-4 portfolio-item">
				<a href="#portfolio-<?php echo $portfolio->ID ?>" class="portfolio-link" data-toggle="modal">
					<div class="caption">
						<div class="caption-content">
							<i class="fa fa-search-plus fa-3x"></i>
						</div>
					</div>
					<?php
					$image = get_post_meta( $portfolio->ID, '_freelancer_portfolio_thumbnail', true );
					?>
					<img src="<?php echo $image ?>" class="img-responsive" alt="">
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- About Section -->
<section class="success" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>About</h2>
				<hr class="star-light">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<p><?php echo cs_get_option( 'desc' ); ?></p>
			</div>

		</div>
	</div>
</section>

<?php get_footer(); ?>
