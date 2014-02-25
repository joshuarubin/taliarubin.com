<?php get_header(); rewind_posts(); ?>

	<?php
	$archive = 0;
	$excerpt = $gpp['gpp_excerpt'];
	$meta = $gpp['gpp_meta'];

	query_posts($query_string.'&posts_per_page=24');
	if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h3 class="fancy"><?php single_cat_title(); ?></h3>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h3 class="fancy"><?php printf(__('Posts Tagged &#8216;%s&#8217;','gpp_i18n'),single_tag_title('',false)); ?></h3>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h3 class="fancy"><?php printf(__('Archive for %s','gpp_i18n'),get_the_time(__('F jS, Y','gpp_i18n'))); ?></h3>		
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h3 class="fancy"><?php printf(__('Archive for %s','gpp_i18n'),get_the_time(__('F, Y','gpp_i18n'))); ?></h3>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h3 class="fancy"><?php printf(__('Archive for %s','gpp_i18n'),get_the_time(__('Y','gpp_i18n'))); ?></h3>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h3 class="fancy"><?php _e('Author Archive','gpp_i18n'); ?></h3>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h3 class="fancy"><?php _e('Blog Archive','gpp_i18n'); ?></h3>
 	  <?php } ?>
	
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php while (have_posts()) : the_post(); $archive++; ?>

<div class="grid_1<?php if($archive==1){ ?> alpha<?php } elseif ($archive==3){ ?> omega<?php } ?>">

	<div class="image-wrap fader<?php if($archive==3){ ?> last<?php } ?>">
	<span class="title"><a href="<?php the_permalink(); ?>" title="go to <?php the_title(); ?>"><?php the_title(); ?></a></span><span class="category"><?php the_category(' + '); ?></span>
	<a href="<?php the_permalink(); ?>" title="go to <?php the_title(); ?>"><?php the_post_thumbnail('240x160'); ?></a>
	</div>

	<?php if ( $meta == 'show' || $meta == '' ) { ?>
	<p class="byline"><?php the_time(__('M d, Y', 'gpp_i18n')); ?> &#183; <?php comments_popup_link(__('Leave A Comment &#187;', 'gpp_i18n'), __('1 Comment &#187;', 'gpp_i18n'),_n('% Comment &#187;', '% Comments &#187;',get_comments_number (),'gpp_i18n')); ?> <?php edit_post_link(__('Edit','gpp_i18n'), '| ', ''); ?></p>
	<?php } ?>
	
	<?php if ( $excerpt == 'show' || $excerpt == '' ) { ?>
	<?php the_excerpt(); ?>
	<?php } ?>

</div><!-- .grid -->

<?php if($archive==3){ ?><div class="clear"></div><?php $archive = 0; ?><?php } ?>

<?php endwhile; ?>

	<div class="nav-interior clearfix">
			<div class="prev"><?php next_posts_link(__('&laquo; Older Entries','gpp_i18n')); ?></div>
			<div class="next"><?php previous_posts_link(__('Newer Entries &raquo;','gpp_i18n')); ?></div>
	</div>

	<?php else : ?>

		<h2 class="center"><?php _e('Not Found','gpp_i18n'); ?></h2>
		<?php get_search_form(); ?>

	<?php endif; ?>

</div><!-- .content-->

<?php get_footer(); ?>