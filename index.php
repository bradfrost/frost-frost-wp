<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 
 get_header(); ?>

 <div class="lc-single">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php

            // check if the repeater field has rows of data
            if( have_rows('songs') ): ?>

                <ul class="c-crazy-grid">

             	<?php // loop through the rows of data
                while ( have_rows('songs') ) : the_row(); ?>

                    <li class="c-crazy-grid__item" title="<?php the_sub_field('song_title'); ?>" data-number="<?php the_sub_field('number_people'); ?>" data-genre="<?php the_sub_field('song_genre'); ?>">
                        <a href="#" class="c-crazy-grid__link"><?php the_sub_field('song_title'); ?></a>
                    </li>

                <?php endwhile;

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
