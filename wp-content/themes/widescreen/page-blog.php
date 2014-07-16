<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
	<div class="content">
		<h3 class="fancy"><?php _e('Blog','gpp_i18n'); ?></h3>
		<?php 
		$temp = $wp_query;
		$wp_query = NULL;
		$wp_query = new WP_Query();
		$wp_query->query('&paged='.$paged); $tb_counter = 1;
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<div <?php if(function_exists('post_class')) : ?><?php post_class(); ?><?php else : ?>class="post post-<?php the_ID(); ?>"<?php endif; ?>>
			<h2 class="fancy"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s','gpp_i18n'),the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php if ( !post_password_required() ) { ?>
					<?php get_template_part( 'part', 'multimedia' ); ?>
				<?php } ?>
				<?php global $more; $more = 0; the_content(); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'gpp_i18n' ), 'after' => '</div>' ) ); ?>
				<?php if ($tb_counter == 1) { ?>
				<?php gpp_ad_code('main'); ?>
				<?php  } ?>
			</div><div class="clear"></div>
		</div><div class="clear"></div>
		<p class="postmetadata"><?php the_time(__('M d, Y', 'gpp_i18n')); ?> | <?php _e('Categories: ','gpp_i18n'); if (the_category(', '))  the_category(); ?> <?php if (get_the_tags()) the_tags(__('| Tags: ','gpp_i18n')); ?> | <?php comments_popup_link(__('Leave A Comment &#187;', 'gpp_i18n'), __('1 Comment &#187;', 'gpp_i18n'),_n('% Comment &#187;', '% Comments &#187;',get_comments_number (),'gpp_i18n')); ?> <?php edit_post_link(__('Edit','gpp_i18n'), '| ', ''); ?></p>
		<?php $tb_counter++; endwhile; ?>
		<div class="nav-interior clearfix">
			<div class="prev"><?php next_posts_link(__('&laquo; Older Entries','gpp_i18n')); ?></div>
			<div class="next"><?php previous_posts_link(__('Newer Entries &raquo;','gpp_i18n')); ?></div>
		</div><div class="clear"></div>
		<?php $wp_query = NULL; $wp_query = $temp;?>
	</div>
<?php get_footer(); ?>