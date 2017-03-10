<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 * Template Name: Homepage
 */

 get_header(); ?>

 <div class="lc-single">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php

            // check if the repeater field has rows of data
            if( have_rows('songs') ): ?>

                <ul class="c-crazy-grid js-crazy-grid">

             	<?php // loop through the rows of data
                $i=0;
                while ( have_rows('songs') ) : the_row(); ?>

                    <?php $file = get_sub_field('song'); ?>

                    <li class="c-crazy-grid__item js-crazy-grid-item <?php if($i < 1) echo 'is-active is-stopped' ?>" title="<?php the_sub_field('song_title'); ?>" data-number="<?php the_sub_field('number_people'); ?>" data-genre="<?php the_sub_field('song_genre'); ?>">
                        <a href="<?php echo $file['url']; ?>" class="c-crazy-grid__link js-audio-player-trigger"><?php the_sub_field('song_title'); ?></a>
                            <svg class="c-crazy-grid__image" width="368px" height="368px" viewBox="0 0 368 368" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                                    <ellipse id="Oval" fill="#000000" cx="184" cy="183.501355" rx="184" ry="183.501355"></ellipse>
                                    <ellipse class="c-crazy-grid__fill <?php if (get_sub_field('song_genre') == "funk") { ?><?php echo 'c-crazy-grid__fill--funk'?><?php } ?><?php if (get_sub_field('song_genre') == "rock") { ?><?php echo 'c-crazy-grid__fill--rock'?><?php } ?><?php if (get_sub_field('song_genre') == "electronica") { ?><?php echo 'c-crazy-grid__fill--electronica'?><?php } ?> js-crazy-grid-item" title="<?php the_sub_field('song_title'); ?>" data-number="<?php the_sub_field('number_people'); ?>" data-genre="<?php the_sub_field('song_genre'); ?>" id="Oval" cx="184" cy="183.501355" rx="82" ry="81.7777778"></ellipse>
                                    <ellipse id="Oval" stroke="#000000" fill="#FFFFFF" cx="183.5" cy="183.00271" rx="8.5" ry="8.47696477"></ellipse>
                                    <ellipse id="Oval" stroke="#FFFBFB" cx="184.5" cy="183.00271" rx="90.5" ry="90.2547425"></ellipse>
                                    <ellipse id="Oval" stroke="#FFFBFB" cx="185" cy="182.504065" rx="99" ry="98.7317073"></ellipse>
                                    <ellipse id="Oval" stroke="#FFFBFB" cx="185.5" cy="182.00542" rx="107.5" ry="107.208672"></ellipse>
                                    <ellipse id="Oval" stroke="#FFFBFB" cx="186" cy="181.506775" rx="116" ry="115.685637"></ellipse>
                                    <ellipse id="Oval" stroke="#FFFBFB" cx="185.5" cy="181.00813" rx="124.5" ry="124.162602"></ellipse>
                                    <ellipse id="Oval" stroke="#FFFBFB" cx="186" cy="180.509485" rx="133" ry="132.639566"></ellipse>
                                    <ellipse id="Oval" stroke="#FFFBFB" cx="185.5" cy="180.01084" rx="141.5" ry="141.116531"></ellipse>
                                    <ellipse id="Oval" stroke="#FFFBFB" cx="185" cy="179.512195" rx="150" ry="149.593496"></ellipse>
                                    <ellipse id="Oval" stroke="#FFFBFB" cx="185.5" cy="181.00813" rx="158.5" ry="158.070461"></ellipse>
                                    <path d="M185,348.054201 C277.231553,348.054201 352,273.488378 352,181.506775 C352,89.5251719 277.231553,14.9593496 185,14.9593496 C92.7684468,14.9593496 18,89.5251719 18,181.506775 C18,227.46465 36.6653561,269.074811 66.848275,299.208837 C97.0744439,329.386043 138.851207,348.054201 185,348.054201 Z" id="Oval" stroke="#FFFBFB"></path>
                                    <path d="M183.5,358.0271 C280.425974,358.0271 359,279.666012 359,183.00271 C359,86.3394085 280.425974,7.97831978 183.5,7.97831978 C86.5740264,7.97831978 8,86.3394085 8,183.00271 C8,212.863833 15.49839,240.978359 28.7197985,265.575728 C58.2973497,320.602388 116.516294,358.0271 183.5,358.0271 Z" id="Oval" stroke="#FFFBFB"></path>
                                    <path d="M79.880252,136.579254 L62.5267364,231.356862 C62.5267364,231.356862 69.8841509,228.949342 50.2337971,228.949342 C30.5834433,228.949342 36.3548614,231.356862 36.3548614,231.356862 L19.7250262,135.360959 C19.7250262,135.360959 28.8548614,133.405881 50.2337971,133.405881 C71.6127328,133.405881 79.880252,136.579254 79.880252,136.579254 Z" id="Polygon" fill="#FFFFFF" opacity="0.833389946" filter="url(#filter-1)" transform="translate(49.802639, 182.381371) scale(-1, -1) rotate(90.000000) translate(-49.802639, -182.381371) "></path>
                                    <path d="M214.549805,3.60253906 L196.410156,97.1714939 C196.410156,97.1714939 203.767571,94.7639736 184.117217,94.7639736 C164.466863,94.7639736 170.238281,97.1714939 170.238281,97.1714939 L153.443359,3.60253906 C153.443359,3.60253906 161.098633,-4.38267702e-15 183.603516,0 C206.108398,2.75605327e-15 214.549805,3.60253906 214.549805,3.60253906 Z" id="Polygon" fill="#FFFFFF" opacity="0.833389946" filter="url(#filter-2)" transform="translate(183.996582, 48.585747) scale(-1, -1) rotate(180.000000) translate(-183.996582, -48.585747) "></path>
                                    <path d="M217.517578,275.110309 L195.995117,367.005859 C195.995117,367.005859 203.352532,364.598339 183.702178,364.598339 C164.051824,364.598339 169.823242,367.005859 169.823242,367.005859 L151.831055,275.110309 C151.831055,275.110309 163.295381,270.265583 184.674316,270.265583 C206.053252,270.265583 217.517578,275.110309 217.517578,275.110309 Z" id="Polygon" fill="#FFFFFF" opacity="0.833389946" filter="url(#filter-3)" transform="translate(184.674316, 318.635721) scale(-1, -1) rotate(360.000000) translate(-184.674316, -318.635721) "></path>
                                    <path d="M348.405273,135.630859 L330.885782,229.3377 C330.885782,229.3377 338.243196,226.93018 318.592843,226.93018 C298.942489,226.93018 304.713907,229.3377 304.713907,229.3377 L289.030273,134.560092 C289.030273,134.560092 303.769666,132.166206 318.592843,132.166206 C333.416019,132.166206 348.405273,135.630859 348.405273,135.630859 Z" id="Polygon" fill="#FFFFFF" opacity="0.833389946" filter="url(#filter-4)" transform="translate(318.717773, 180.751953) scale(-1, -1) rotate(270.000000) translate(-318.717773, -180.751953) "></path>
                                </g>
                            </g>
                        </svg>
                    </li>
                <?php $i++;
                endwhile;

            else :

                // no rows found

            endif;

            ?>

	<?php endwhile; ?>

	<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>
</div>

<?php  get_footer(); ?>
