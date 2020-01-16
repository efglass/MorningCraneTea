<?php
/* Template Name: Slider */
$portfolio_posts = get_theme_mod( 'artsy_slider_portfolio_toggle', 1 );
?>
<?php get_header(); ?>

<div class="featured-slider">
	
	<div class="featured-slider-items">
		<!-- Slider 1 (Our Teas) -->
		<div class="featured-slider-item slider-to-store">
			<div class="featured-slider-content">
				<!-- Site Title -->
				<h1 class="home-page-title">
					<ul class="title-text">
						<li>M</li>
						<li class="title-ghost">o</li>
						<li class="title-ghost">r</li>
						<li class="title-ghost">n</li>
						<li class="title-ghost">i</li>
						<li class="title-ghost">n</li>
						<li class="title-ghost">g</li>
						<li class="title-spaced">C</li>
						<li class="title-ghost">r</li>
						<li class="title-ghost">a</li>
						<li class="title-ghost">n</li>
						<li class="title-ghost">e</li>
						<li class="title-spaced">T</li>
						<li class="title-ghost">e</li>
						<li class="title-ghost">a</li>
					</ul>
				</h1>
				<!-- Teas title -->
				<h2 class="featured-slider-title h1">
					<span class="slider-title-main">Our Teas</span>
					<span class="slider-title-sub">Quality from Korea</span>
				</h2>
				<!-- Shop Button -->
				<a class="btn"
				   href="<?php echo get_page_link( get_page_by_title( 'Tea' )->ID ); ?>"><?php echo esc_html( get_theme_mod( 'artsy_slider_button_text', 'Pre-Order Teas' ) ); ?></a>
			</div>
			<div class="mask"></div>
		</div><!-- /Slider 1 (Our Teas) -->
		
		<div class="featured-slider-items">
			<!-- Slider 2 (Blog) -->
			<div class="featured-slider-item slider-to-blog">
				<div class="featured-slider-content">
					<!-- Site Title -->
					<h1 class="home-page-title">
						<ul class="title-text">
							<li>M</li>
							<li class="title-ghost">o</li>
							<li class="title-ghost">r</li>
							<li class="title-ghost">n</li>
							<li class="title-ghost">i</li>
							<li class="title-ghost">n</li>
							<li class="title-ghost">g</li>
							<li class="title-spaced">C</li>
							<li class="title-ghost">r</li>
							<li class="title-ghost">a</li>
							<li class="title-ghost">n</li>
							<li class="title-ghost">e</li>
							<li class="title-spaced">T</li>
							<li class="title-ghost">e</li>
							<li class="title-ghost">a</li>
						</ul>
					</h1>
					<!-- blog title -->
					<h2 class="featured-slider-title h1">
						<span class="slider-title-main">Articles &amp; Blogs</span>
						<span class="slider-title-sub">Our Thoughts, Our Knowledge</span>
					</h2>
					<!-- blog button -->
					<a class="btn"
					   href="<?php echo get_page_link( get_page_by_title( 'Blog' )->ID ); ?>"><?php echo esc_html( get_theme_mod( 'artsy_slider_button_text', 'Just A Click Away' ) ); ?></a>
				</div>
				<div class="mask"></div>
			</div>
		</div><!-- /Slider 2 (Blog) -->
	
	</div>
	
	<?php get_footer(); ?>
