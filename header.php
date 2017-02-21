<!doctype html>
<html class="no-js">

<?php include (TEMPLATEPATH . '/includes/meta/head.php');  ?>

<body <?php body_class(); ?>>
	<header class="header" role="banner">
		<header id="masthead" class="c-header" role="banner">

			<div class="site-branding">
				<div class="wrap">

					<h1 class="c-logo">
					    <a href="#" class="c-logo" rel="home">
					        <img src="/wp-content/themes/frostfrost/images/logo.png" alt="Frost Frost Logo" />
					    </a>
					</h1><!-- end c-logo -->

				</div><!-- .wrap -->
			</div><!-- .site-branding -->

			<audio src="" class="c-audio-player js-audio-player" controls></audio>

			<nav id="nav" class="c-primary-nav">

		    	<ul class="c-primary-nav__list">

		    		<li class="c-primary-nav__item">
		                <a href="#"  class="c-primary-nav__link">Soundcloud</a>
		            </li><!-- end c-primary-nav__item -->
		    		<li class="c-primary-nav__item">
		                <a href="#"  class="c-primary-nav__link">Twitter</a>
		            </li><!-- end c-primary-nav__item -->
		            <li class="c-primary-nav__item">
		                <a href="#"  class="c-primary-nav__link">Facebook</a>
		            </li><!-- end c-primary-nav__item -->
		            <li class="c-primary-nav__item">
		                <a href="#"  class="c-primary-nav__link">Instagram</a>
		            </li><!-- end c-primary-nav__item -->

	    		</ul><!-- end c-primary-nav__list -->

	    	</nav><!-- end c-primary-nav -->

			<?php if ( has_nav_menu( 'top' ) ) : ?>
				<div class="navigation-top">
					<div class="wrap">
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</div><!-- .wrap -->
				</div><!-- .navigation-top -->
			<?php endif; ?>

		</header><!-- #masthead -->
	</header>

	<main role="main">
