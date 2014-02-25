<?php
/*
Template Name: Slideshow
*/
?>
<?php get_header() ?>

<?php the_post() ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2 class="fancy"><?php the_title() ?></h2>
				<div class="entry-content">
				
				<div class="nav">
					<a class="prev" href="#"><?php _e('Prev','gpp_i18n'); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="next" href="#"><?php _e('Next','gpp_i18n'); ?></a>&nbsp;&nbsp;<span id="info"></span>
				</div> 

				<div class="slideshow">
					<?php 
					$args = array(
						'order'          => 'ASC',
						'orderby' 		 => 'menu_order',
						'post_type'      => 'attachment',
						'post_parent'    => $post->ID,
						'post_mime_type' => 'image',
						'post_status'    => null,
						'numberposts'    => -1,
						'size' => 'medium',
					);
					
					$attachments = get_posts($args);
					if ($attachments) {
						foreach ($attachments as $attachment) {
						echo "<div class='next'>";
							echo wp_get_attachment_image($attachment->ID, 'medium', false, false);
						$description = $attachment->post_content;
						if (isset($description)) { echo '<p class="caption">'.$description.'</p>';}
						echo "</div>";
						}
					}
					?>
					
				</div>
				
				<h3><a id="toggle"><?php _e('+ More info','gpp_i18n'); ?></a></h3>
				<div class="project-info">
				<?php the_content() ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'gpp_i18n' ), 'after' => '</div>' ) ); ?>
                <?php edit_post_link(__('Edit this entry','gpp_i18n'),'','.'); ?>
				</div>

				</div>
			</div><!-- .post -->

<?php get_footer() ?>