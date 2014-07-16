== Installation ==
1. Download Widescreen from your Graph Paper Press [member dashboard](https://graphpaperpress.com/members/member.php) to your Desktop.
2. Unzip widescreen.zip to your Desktop.
3. Using an FTP client, log into your website and go to WordPress' `/wp-content/themes/` folder.
4. Upload `widescreen` to `/wp-content/themes/`.
5. Activate Widescreen through the Appearance -> Themes menu in your WordPress Dashboard.
6. Go to Settings -> Media and make sure to enter the following values:
		* Image sizes
			** Thumbnail size
				*** Width: 240
				*** Height: 160
				*** [checked] Crop thumbnails to exact dimensions (normally thumbnails are proportional)

			** Medium size
				*** Max Width: 795
				*** Max Height: 0

			** Large size
				*** Max Width: 1600
				*** Max Height: 0


		* Embeds
			** [checked] When possible, embed the media content from a URL directly onto the page. For example: links to Flickr and YouTube.
			** Maximum embed size
				*** Width: 795
				*** Height: 0

= Theme Options =

Visit the Appearance -> Theme Options page to begin customizing the Theme Options for your site.

= Thumbnails =

Every Post needs to have a Featured Image assigned to it.  You can assign a Featured Image by uploading an image to the Post, and then click the "Use as featured image" button to make the image the Featured Image for that post.  [Watch a video tutorial](http://vimeo.com/8462281).

If you are migrating from an old theme to a new theme and your thumbnails look squished or distorted, you might need to re-upload the image you plan on using for the post thumbnail. This is because WordPress creates your image sizes based on the dimensions you specified above. Old thumbnails will not be automatically resized.  You can regenerate your thumbnails with the [Regenerate Thumbnails](http://wordpress.org/extend/plugins/regenerate-thumbnails/) WordPress plugin.


= Video =

Paste the link to your video onto any page or post and WordPress will automatically embed the video from the link.

= Menus =

This theme has built-in support for WordPress' new Menu system, which will be released in version 3.0. This new system, which can be accessed at Appearance -> Menus, allows you to drag and drop menu items with total ease. You can also add custom links.

This theme supports one sub-menu level. You can add sub-menus in WordPress' Appearance -> Menus by dragging a menu item directly underneath the parent menu item. The sub-menu item will float slightly to the right, letting you know it is a sub-menu. This theme only supports one sub-menu level.

= Adding Galleries to Widescreen =

To add images to the homepage of Widescreen, visit the Appearance -> Theme Options -> Slideshow section and upload images.To add images to Posts or Pages, use the Add Media button and after uploading images, click the Insert Gallery button. This will add what is called "gallery shortcode" into the post content area.

	* Special Widescreen Page template: Create a page and upload photos using the Add Media button. Do not insert them into a page as described above. Assign the page template called Slideshow to the page and publish it out.
	* Special Widescreen Post Galleries Format: Assign a Post to the Galleries Post Format (located under the Publish box at top right).  Upload images using the Add Media button.  After uploading images, click the Insert Gallery button.  This Post Format will make the Post into a Fullscreen slideshow, just like your homepage.
	* Special Widescreen Single Slideshow template: Create a post and upload photos using the Add Media button. Do not insert them into a post as described above in #1. Assign the post to a category called "Galleries". If you don't have a category called "Galleries" than just create one. The Post will then display all images uploaded in a Slideshow (not a Fullscreen Slideshow, for a Fullscreen Slideshow please use the  Special Widescreen Post Galleries Format option described above).

= Page Templates =

Widescreen has four page templates that you can choose from:

	* Slideshow: Displays all photos uploaded into the page. The post content is hidden beneath the images in an info box, which can be toggled open and closed. You don't need to embed your photo gallery into the post itself; the page template already handles that for you. To use this template, create a page and assign it the Slideshow page template.
	* Fullscreen Slideshow: Same as above, only images are displayed fullscreen.
	* Featured Homepage: In versions of Widescreen prior to 1.6, an alternative homepage design was included in the theme, which could be controlled on the theme options page.  We removed this in version 1.6 because it was rarely used and added unnecessary code bloat and complexity.  We migrated this to a Page template, now called the Featured Homepage template.  Open up the file page-featured.php in a text editor and follow the comments in the file for adding your own content.  When you are satisfied, publish out a Page in WordPress called Featured and assign it to the Featured Homepage page template.  Then, visit your Settings -> Reading page and assign the Featured page to a Static Page -> Front Page -> Featured page.
	* Blog: Displays all posts, regardless of category, on a page. To use this, create a page called Blog and assign it the Blog page template.
	* Default: The default, single column page template. You don't need to do anything special to use this, just publish a page.

= Advertising =

This theme has two built-in spots for advertising: One in the footer and one underneath the main post. You can add your adversing code on the Theme Options panel.