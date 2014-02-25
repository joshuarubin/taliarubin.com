<?php get_header(); ?>
<?php 
$format = get_post_format();
get_template_part( 'format', $format );
?>
<?php get_footer(); ?>

