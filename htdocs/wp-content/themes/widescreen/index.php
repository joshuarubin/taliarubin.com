<?php /* get_header(); ?>

<!-- Pagination -->
<?php if ( $paged < 1 ) { ?>

<?php if ( $gpp['gpp_welcome'] == 'true' ) { include (TEMPLATEPATH . '/apps/welcome.php'); } ?>

<?php if ( get_option('gpp_slideshow') == 'true' ) { include (TEMPLATEPATH . '/apps/slideshow.php'); } ?>

<?php if ( get_option('gpp_video') == 'true' ) { include (TEMPLATEPATH . '/apps/video-home.php'); } ?>

<?php if ( get_option('gpp_slider') == 'true' ) { include (TEMPLATEPATH . '/apps/slider.php'); } ?>

<?php if ( get_option('gpp_slider_posts') == 'true' ) { include (TEMPLATEPATH . '/apps/slider_posts.php'); } ?>

<?php if ( get_option('gpp_featured') == 'true' ) { include (TEMPLATEPATH . '/apps/featured.php'); } ?>

<!-- End Pagination -->
<?php } ?>

<?php if ( get_option('gpp_blog') == 'true' ) { include (TEMPLATEPATH . '/apps/blog.php'); } ?>

<?php if ( get_option('gpp_category_columns') == 'true' ) { include (TEMPLATEPATH . '/apps/category-columns.php'); } ?>

<!-- Footer -->
<?php get_footer(); */ ?>