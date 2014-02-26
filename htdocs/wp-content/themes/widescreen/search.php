<?php get_header(); ?>

<div class="content clearfix">

<?php if (have_posts()) : ?>

	<h2 class="fancy"><?php _e('Search Results','gpp_i18n'); ?></h2>

	<div class="navigation">
		<div><?php next_posts_link(__('&laquo; Older Entries','gpp_i18n')); ?></div>
		<div><?php previous_posts_link(__('Newer Entries &raquo;','gpp_i18n')); ?></div>
	</div>

<?php while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s','gpp_i18n'),the_title_attribute('echo=0')); ?>"><?php the_title() ?></a></h2>
<a href="<?php the_permalink(); ?>" title="go to <?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
<?php the_excerpt(); ?>
		<div class="clear"></div>
		<p class="postmetadata alt quiet"><?php the_time(__('M d, Y', 'gpp_i18n')); ?> @ <?php the_time() ?> | <?php comments_popup_link(__('Have your say &#187;', 'gpp_i18n'), __('1 Comment &#187;', 'gpp_i18n'),_n('% Comment &#187;', '% Comments &#187;',get_comments_number (),'gpp_i18n')); ?></p>
	</div><!-- .post -->
	<div class="clear"></div>
<?php endwhile; ?>

<div class="clear"></div>

	<div class="navigation">
		<div><?php next_posts_link(__('&laquo; Older Entries','gpp_i18n')); ?></div>
		<div><?php previous_posts_link(__('Newer Entries &raquo;','gpp_i18n')); ?></div>
	</div>

<?php else : ?>

	<h2><?php _e('No posts found.','gpp_i18n'); ?></h2>
	<h6><?php _e('Use the search tap at top right to start a new search.','gpp_i18n'); ?></h6>

<?php endif; ?>

</div><!-- .content -->

<?php get_footer(); ?>