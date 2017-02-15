<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

 <div class="lc-single">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <ul class="c-crazy-grid">
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
                <li class="c-crazy-grid__item" data-number="3" "title">
                    <a href="" class="c-crazy-grid__link">Song Link</a>
                </li>
            </ul>

	<?php endwhile; ?>

	<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>
</div>
