<?php
/**
 * Settings.
 *
 * @author Dave Ligthart <info@daveligthart.com>
 * @package wpcp
 * @subpackage view
 * @version 0.1
 */
?>
    <div class="wrap">
        <h2><?php _e('WP-Copyright-Protection', 'wpcp'); ?></h2>

        <form method="post" action="options.php">
            <?php settings_fields( 'wpcp-group' ); ?>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><?php _e('Exclude Pages', 'wpcp'); ?></th>
                    
                    <td><input type="text" name="wpcp_exclude_pages" value="<?php echo get_option('wpcp_exclude_pages'); ?>" />
                    <p><?php _e('Enter page ids: comma-separated. e.g. 1,2,3,4', 'wpcp'); ?></td>
                    
                </tr>
                <tr>    
                	<th scope="row"><?php _e('Disable for registered users', 'wpcp'); ?></th>
                    <td>
	                    <input type="checkbox" name="wpcp_disable_for_regusers" value="1" <?php if( get_option('wpcp_disable_for_regusers')) { echo 'checked="checked"'; } ?>/>
	                    <p><?php _e('Toggle', 'wpcp'); ?></p>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    
   <a style="float:left; margin-right:10px;" href="http://daveligthart.com" target="_blank" title="Like"><img src="<?php echo plugin_dir_url(__FILE__); ?>/thumbsup.png" width="32" height="32" alt="I Like" /></a>
 
   <div style="margin:15px 0px;"> 
   		<span>By</span>  <a href="http://daveligthart.com" target="_blank" title="Created by DaveLigthart.com"><span>Dave</span> <span>Ligthart</span></a>
    
    	<cite>Happy to be of service.</cite> 
   </div>
