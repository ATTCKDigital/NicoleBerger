<?php
define('WPE_PROD', 'nicoleberger'); //define the WPEngine environments
define('WPE_STAGE', 'nicolebstage');

define('CHILD_THEME_DIR', get_stylesheet_directory()); // use when there are files that should ONLY be from the child theme.
// Use locate_template() to include files.  This function first checks the child theme for the file and if there is none, uses the parent theme.
// Allows us to override main functions in the child theme without changing the parent.

/*** Global Variables ***/
// These define globally available variables, and must be included first
include_once(locate_template('config/global-variables/blocks.php'));
include_once(locate_template('config/global-variables/colors.php'));
include_once(locate_template('config/global-variables/nav-menus.php'));
include_once(locate_template('config/global-variables/blocks.php'));
include_once(locate_template('config/global-variables/wysiwyg-formats.php'));


// WP functions are split out into individual files for clarity. Disable/Enable files by commenting out here. 
// See README.md in parent theme for details on each config file

/*** ACF Configs ***/
// include_once(locate_template('config/acf-configs/acf-field-values.php'));
// include_once(locate_template('config/acf-configs/acf-wpml-options.php'));
include_once(locate_template('config/acf-configs/acf-options-page.php')); //REQUIRED
include_once(locate_template('config/acf-configs/acf-search.php')); //RECOMMENDED

/*** WP-Admin Configs ***/
// include_once(locate_template('config/admin-configs/change-post-labels.php'));
// include_once(locate_template('config/admin-configs/image-crops.php')); //RECOMMENDED
include_once(locate_template('config/admin-configs/remove-comments-column.php')); //RECOMMENDED
// include_once(locate_template('config/admin-configs/sidebars.php'));

/*** Theme Configs ***/
// include_once(locate_template('config/theme-configs/custom-post-types.php'));
// include_once(locate_template('config/theme-configs/disable-tax-archive.php'));
// include_once(locate_template('config/theme-configs/geotarget.php'));
include_once(locate_template('config/theme-configs/load-more.php')); //RECOMMENDED
include_once(locate_template('config/theme-configs/author-slug.php'));
// include_once(locate_template('config/theme-configs/password-protection.php'));
// include_once(locate_template('config/theme-configs/wpml-language-switcher.php'));

function enable_extended_upload ( $mime_types =array() ) {
	// The MIME types listed here will be allowed in the media library.
	// You can add as many MIME types as you want.
	// $mime_types['gz']  = 'application/x-gzip';
	// $mime_types['zip']  = 'application/zip';
	// $mime_types['rtf'] = 'application/rtf';
	// $mime_types['ppt'] = 'application/mspowerpoint';
	// $mime_types['ps'] = 'application/postscript';
	// $mime_types['flv'] = 'video/x-flv';
	$mime_types['svg'] = 'image/svg-xml';

	// If you want to forbid specific file types which are otherwise allowed,
	// specify them here.  You can add as many as possible.
	// unset( $mime_types['exe'] );
	// unset( $mime_types['bin'] );
	return $mime_types;
}

add_filter('upload_mimes', 'enable_extended_upload');
