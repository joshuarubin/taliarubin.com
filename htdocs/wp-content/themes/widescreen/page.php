<?php get_header(); ?>

<div class="content clearfix">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class(); ?>>
			<h2 class="fancy"><?php the_title(); ?></h2>
				<?php if ( !post_password_required() ) { ?>
					<?php get_template_part( 'part', 'multimedia' ); ?>
				<?php } ?>
				<?php the_content(); ?>
			<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages','gpp_i18n').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link(__('Edit this entry','gpp_i18n'), '<p>', '.</p>'); ?>

</div><!-- .content -->
	
<?php get_footer(); ?>