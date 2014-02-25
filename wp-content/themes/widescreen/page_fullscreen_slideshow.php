<?php
/*
Template Name: Fullscreen Slideshow
*/
?>
<?php get_header() ?>

<?php the_post(); ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class('fsslideshow'); ?>>
		<div class="entry-content">
		<div id="slideshow" class="jbgallery">
            <ul>
                <?php 
                $args = array(
                    'order'          => 'ASC',
                    'orderby' 		 => 'menu_order',
                    'post_type'      => 'attachment',
                    'post_parent'    => $post->ID,
                    'post_mime_type' => 'image',
                    'post_status'    => null,
                    'numberposts'    => -1,
                    'size' => 'large',
                );
                
                $attachments = get_posts($args);
                if ($attachments) {
                    foreach ($attachments as $attachment) {
                    echo '<li>';
                    $image_attributes = wp_get_attachment_image_src($attachment->ID, 'large', false, false);
					$image_link = $image_attributes[0];
                    $description = $attachment->post_content;
					echo '<a title="'.$description.'" href="'.$image_link.'"><img src="'.$image_link.'" alt="" /></a>';
                    //if (isset($description)) { echo '<p class="caption">'.$description.'</p>';}
                    echo '</li>';
					echo "\n";
                    }
                }
                ?>
        	</ul>
                
		</div>
		
		<a id="toggle" class="toggle"><?php _e('Show info','gpp_i18n'); ?></a>
		<div class="project-info">
        
            <div class="infotext">
                <h2 class="fancy"><?php the_title() ?></h2>
                <?php the_content() ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'gpp_i18n' ), 'after' => '</div>' ) ); ?>
            </div>
        </div>

		</div><!-- .entry-content -->
		
	</div><!-- .post -->
	
<?php get_footer() ?>