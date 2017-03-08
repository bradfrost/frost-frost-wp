<!doctype html>
<html class="no-js">

<?php include (TEMPLATEPATH . '/includes/meta/head.php');  ?>

<body <?php body_class(); ?>>
	<header id="masthead" class="c-header js-header" role="banner">

		<img class="c-header__image" src="wp-content/themes/frostfrost/images/recordplayer.svg" />
		<div class="c-header-nav-container">
			<h1 class="c-logo">
				<a href="#" class="c-logo__link" rel="home">
					<img src="/wp-content/themes/frostfrost/images/logo.png" alt="Frost Frost Logo" />
				</a>
			</h1><!-- end c-logo -->

			<div class="c-header-nav-audio">

				<ul class="c-button-bar">

				    <li class="c-button-bar__item">
						<button href="#" class="c-btn js-audio-player-previous">
						    <svg class="c-btn__icon" width="73px" height="40px" viewBox="0 0 73 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						        <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
						        <title>Previous</title>
						        <desc>Created with Sketch.</desc>
						        <defs></defs>
						        <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd">
						            <g id="Previous">
						                <polygon id="Triangle" transform="translate(18.000000, 20.000000) rotate(270.000000) translate(-18.000000, -20.000000) " points="18 2 37.5 38 -1.5 38"></polygon>
						                <polygon id="Triangle" transform="translate(55.000000, 20.000000) rotate(270.000000) translate(-55.000000, -20.000000) " points="55 2 74.5 38 35.5 38"></polygon>
						            </g>
						        </g>
						    </svg>
						</button>
					</li>

					<li class="c-button-bar__item">
						<button href="#" class="c-btn js-audio-player-play">
						    <svg class="c-btn__icon" width="89px" height="41px" viewBox="0 0 89 41" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						        <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
						        <title>Play</title>
						        <desc>Created with Sketch.</desc>
						        <defs></defs>
						        <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd">
						            <g id="Play">
						                <polygon id="Triangle" transform="translate(18.000000, 20.500000) rotate(90.000000) translate(-18.000000, -20.500000) " points="18 2.5 37.5 38.5 -1.5 38.5"></polygon>
						                <rect id="Rectangle-4" x="74" y="0" width="15" height="41"></rect>
						                <rect id="Rectangle-4" x="51" y="0" width="15" height="41"></rect>
						            </g>
						        </g>
						    </svg>
						</button>
					</li>

					<li class="c-button-bar__item">
						<button href="#" class="c-btn js-audio-player-next">
						    <svg class="c-btn__icon" width="73px" height="39px" viewBox="0 0 73 39" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						        <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
						        <title>Next</title>
						        <desc>Created with Sketch.</desc>
						        <defs></defs>
						        <g id ="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd">
						            <g id="Next">
						                <polygon id="Triangle" transform="translate(18.000000, 19.500000) rotate(90.000000) translate(-18.000000, -19.500000) " points="18 1.5 37.5 37.5 -1.5 37.5"></polygon>
						                <polygon id="Triangle" transform="translate(55.000000, 19.500000) rotate(90.000000) translate(-55.000000, -19.500000) " points="55 1.5 74.5 37.5 35.5 37.5"></polygon>
						            </g>
						        </g>
						    </svg>
						</button>
					</li>

				</ul>

				<div class="c-time">
					<audio src="wp-content/uploads/2017/02/120.mp3" class="c-audio-player js-audio-player" controls></audio>
					<span class="c-time__time js-time">0:00/0:00</span>
				</div>
			</div>

		</div>

		<div class="c-record-player js-record-player">

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


			<?php if( have_rows('songs') ): ?>

			<?php // loop through the rows of data
			while ( have_rows('songs') ) : the_row(); ?>
			<div class="c-crazy-grid__item is-active is-stopped js-crazy-grid-item">

				<a href="<?php echo $file['url']; ?>" class="c-crazy-grid__link js-audio-player-trigger"><?php the_sub_field('song_title'); ?></a>
				<svg class="c-crazy-grid__image" width="456px" height="456px" viewBox="0 0 456 456" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
				    <title>Record</title>
				    <desc>Created with Sketch.</desc>
				    <defs>
				        <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-1">
				            <feGaussianBlur stdDeviation="15 0" in="SourceGraphic"></feGaussianBlur>
				        </filter>
				        <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-2">
				            <feGaussianBlur stdDeviation="15 0" in="SourceGraphic"></feGaussianBlur>
				        </filter>
				        <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-3">
				            <feGaussianBlur stdDeviation="15 0" in="SourceGraphic"></feGaussianBlur>
				        </filter>
				        <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-4">
				            <feGaussianBlur stdDeviation="15 0" in="SourceGraphic"></feGaussianBlur>
				        </filter>
				    </defs>
				    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
				        <g id="Record" transform="translate(0, 0)">
				            <ellipse id="Oval" fill="#000000" cx="227.754801" cy="227.636783" rx="227.754801" ry="227.636783"></ellipse>
				            <ellipse class="c-crazy-grid__fill <?php if (get_sub_field('song_genre') == "funk") { ?><?php echo 'c-crazy-grid__fill--funk'?><?php } ?><?php if (get_sub_field('song_genre') == "rock") { ?><?php echo 'c-crazy-grid__fill--rock'?><?php } ?><?php if (get_sub_field('song_genre') == "electronica") { ?><?php echo 'c-crazy-grid__fill--electronica'?><?php } ?> js-crazy-grid-item" title="<?php the_sub_field('song_title'); ?>" data-number="<?php the_sub_field('number_people'); ?>" data-genre="<?php the_sub_field('song_genre'); ?>" id="Oval" fill="#4990E2" cx="227.754801" cy="227.636783" rx="101.499422" ry="101.446827"></ellipse>
				            <ellipse id="Oval" stroke="#000000" fill="#FFFFFF" cx="227.135902" cy="227.018204" rx="10.5212816" ry="10.5158296"></ellipse>
				            <ellipse id="Oval" stroke="#FFFBFB" cx="228.3737" cy="227.018204" rx="112.020704" ry="111.962657"></ellipse>
				            <ellipse id="Oval" stroke="#FFFBFB" cx="228.992599" cy="226.399626" rx="122.541985" ry="122.478486"></ellipse>
				            <ellipse id="Oval" stroke="#FFFBFB" cx="229.611498" cy="225.781048" rx="133.063267" ry="132.994316"></ellipse>
				            <ellipse id="Oval" stroke="#FFFBFB" cx="230.230397" cy="225.16247" rx="143.584548" ry="143.510146"></ellipse>
				            <ellipse id="Oval" stroke="#FFFBFB" cx="229.611498" cy="224.543892" rx="154.10583" ry="154.025975"></ellipse>
				            <ellipse id="Oval" stroke="#FFFBFB" cx="230.230397" cy="223.925313" rx="164.627111" ry="164.541805"></ellipse>
				            <ellipse id="Oval" stroke="#FFFBFB" cx="229.611498" cy="223.306735" rx="175.148393" ry="175.057634"></ellipse>
				            <ellipse id="Oval" stroke="#FFFBFB" cx="228.992599" cy="222.688157" rx="185.669675" ry="185.573464"></ellipse>
				            <ellipse id="Oval" stroke="#FFFBFB" cx="229.611498" cy="224.543892" rx="196.190956" ry="196.089294"></ellipse>
				            <path d="M228.992599,431.767593 C343.156615,431.767593 435.704836,339.267329 435.704836,225.16247 C435.704836,111.057611 343.156615,18.5573464 228.992599,18.5573464 C114.828582,18.5573464 22.280361,111.057611 22.280361,225.16247 C22.280361,282.174053 45.3842982,333.792218 82.7446498,371.174028 C120.158536,408.609402 171.869723,431.767593 228.992599,431.767593 Z" id="Oval" stroke="#FFFBFB"></path>
				            <path d="M227.135902,444.139157 C347.110662,444.139157 444.369421,346.930796 444.369421,227.018204 C444.369421,107.105613 347.110662,9.89725142 227.135902,9.89725142 C107.161142,9.89725142 9.90238265,107.105613 9.90238265,227.018204 C9.90238265,264.061473 19.1838736,298.938056 35.5493043,329.451542 C72.160333,397.713119 144.223615,444.139157 227.135902,444.139157 Z" id="Oval" stroke="#FFFBFB"></path>
				            <path d="M98.8756026,169.429059 L77.3954586,287.002413 C77.3954586,287.002413 86.5024504,284.01584 62.1792851,284.01584 C37.8561198,284.01584 44.9999685,287.002413 44.9999685,287.002413 L24.4155946,167.917742 C24.4155946,167.917742 35.7164848,165.492432 62.1792851,165.492432 C88.6420854,165.492432 98.8756026,169.429059 98.8756026,169.429059 Z" id="Polygon" fill="#FFFFFF" opacity="0.833389946" filter="url(#filter-1)" transform="translate(61.645599, 226.247423) scale(-1, -1) rotate(90.000000) translate(-61.645599, -226.247423) "></path>
				            <path d="M265.569283,4.46901551 L243.116065,120.543013 C243.116065,120.543013 252.223057,117.55644 227.899892,117.55644 C203.576727,117.55644 210.720575,120.543013 210.720575,120.543013 L189.931857,4.46901551 C189.931857,4.46901551 199.407538,-5.43679089e-15 227.264033,0 C255.120528,3.41893442e-15 265.569283,4.46901551 265.569283,4.46901551 Z" id="Polygon" fill="#FFFFFF" opacity="0.833389946" filter="url(#filter-2)" transform="translate(227.750570, 60.271507) scale(-1, -1) rotate(180.000000) translate(-227.750570, -60.271507) "></path>
				            <path d="M269.242786,341.279364 L242.602331,455.277472 C242.602331,455.277472 251.709323,452.290899 227.386157,452.290899 C203.062992,452.290899 210.206841,455.277472 210.206841,455.277472 L187.93615,341.279364 C187.93615,341.279364 202.126668,335.269392 228.589468,335.269392 C255.052269,335.269392 269.242786,341.279364 269.242786,341.279364 Z" id="Polygon" fill="#FFFFFF" opacity="0.833389946" filter="url(#filter-3)" transform="translate(228.589468, 395.273432) scale(-1, -1) rotate(360.000000) translate(-228.589468, -395.273432) "></path>
				            <path d="M431.255292,168.252558 L409.569703,284.497606 C409.569703,284.497606 418.676695,281.511033 394.353529,281.511033 C370.030364,281.511033 377.174213,284.497606 377.174213,284.497606 L357.761045,166.924252 C357.761045,166.924252 376.005434,163.954593 394.353529,163.954593 C412.701625,163.954593 431.255292,168.252558 431.255292,168.252558 Z" id="Polygon" fill="#FFFFFF" opacity="0.833389946" filter="url(#filter-4)" transform="translate(394.508169, 224.226099) scale(-1, -1) rotate(270.000000) translate(-394.508169, -224.226099) "></path>
				        </g>
				    </g>
				</svg>

			</div>
		<?php break;
		endwhile;
		reset_rows();
	else :

		// no rows found

	endif; ?>

			<div class="c-lever js-lever">
				<img class="c-lever__image" src="wp-content/themes/frostfrost/images/lever.svg" />
				<img class="c-lever-base__image" src="wp-content/themes/frostfrost/images/lever-base.svg" />
			</div>

			<input class="c-input-range" type="range" min="0" max="1" step="0.1" orient="vertical"></input>

		</div>

	</header><!-- #masthead -->

	<main role="main">
