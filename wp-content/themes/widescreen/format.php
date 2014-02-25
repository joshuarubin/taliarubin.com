<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h2 class="fancy"><?php the_title(); ?></h2>
				<?php if ( !post_password_required() ) { ?>
					<?php get_template_part( 'part', 'multimedia' ); ?>
				<?php } ?>
				<?php the_content(); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'gpp_i18n' ), 'after' => '</div>' ) ); ?>

	<div class="clear"></div>

	<p class="postmetadata fader">
		<small>
			<?php printf(__('Posted on %1$s at %2$s.','gpp_i18n'),get_the_time(__('l, F jS, Y','gpp_i18n')),get_the_time());?>
			<?php _e('Filed under: ','gpp_i18n'); ?> <?php the_category(', '); the_tags(__(' Tags: ','gpp_i18n')); ?>
			<?php printf(__('<a href="%1$s" title="%2$s feed">%2$s</a> feed.','gpp_i18n'),get_post_comments_feed_link(),__('RSS 2.0','gpp_i18n')); ?> 
			<?php edit_post_link(__('Edit this entry','gpp_i18n'),'','.'); ?>
		</small>
	</p>

	<div class="navi prev left"><?php if( is_attachment() ) { next_image_link(); } else { next_post_link( '%link', '&larr;', TRUE ); } ?></div>
	<div class="navi next right"><?php if( is_attachment() ) { previous_image_link(); } else { previous_post_link( '%link', '&rarr;', TRUE ); } ?></div>
	<div class="clear"></div>
	
<?php endwhile; else : ?>
	<h2 class="center"><?php _e('Not Found','gpp_i18n'); ?></h2>
	<p class="center"><?php _e('Sorry, but you are looking for something that isn\'t here.','gpp_i18n'); ?></p>
	<?php get_search_form(); ?>

	</div><!-- end post -->

<?php endif; ?>

	<?php gpp_ad_code('main'); ?>
	
	<?php comments_template('', true); ?>