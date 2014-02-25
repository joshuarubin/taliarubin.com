<?php
/*
Template Name: Featured Homepage
*/
$featured_category_ID = $gpp['gpp_featured_cat'];
$featured_category = get_cat_name($featured_category_ID);
	if($featured_category_ID=="") {$featured_category = __('Latest','gpp_i18n');}
$featured_category_number = $gpp['gpp_featured_number'];
get_header();?>

<!-- Featured Posts -->
<div class="content">

<?php if ($gpp['gpp_welcome'] != '' ) { ?>
<?php echo stripslashes($gpp['gpp_welcome']);?>
<?php } ?>

<!-- CHANGE THE FEATURED TITLE BELOW -->
<h6 class="sub"><?php echo "$featured_category"; ?></h6>

<!-- REPLACE cat=1 BELOW WITH THE CATEGORY ID THAT YOU WANT TO SHOW -->
<?php
$featured = 0;
$featured_query = new WP_Query("cat=$featured_category_ID&showposts=$featured_category_number");
while ($featured_query->have_posts()) : $featured_query->the_post();
		$do_not_duplicate = $post->ID; $featured++; ?>
<div class="grid_1<?php if($featured==1){ ?> alpha<?php } elseif ($featured==3){ ?> omega<?php } ?>">

	<div class="image-wrap fader<?php if($featured==3){ ?> last<?php } ?>">
		<div class="thumblink">
			<span class="title"><?php the_title(); ?></span>
			<a href="<?php the_permalink(); ?>" title="go to <?php the_title(); ?>"><?php the_post_thumbnail('240x160'); ?></a>
		</div>
			<span class="category"><?php the_category(' + '); ?></span>
	</div>

</div><!-- .grid -->

<?php if($featured==3){ ?><div class="clear"></div><?php $featured = 0; ?><?php } ?>

<?php endwhile; wp_reset_query(); ?>

</div><!-- .content -->

<?php get_footer(); ?>