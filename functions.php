<?php
/**
 * functions.php
 */
define('THEME_NAME', '');

/* ==|== Theme Specific Admin =============================================== */
require_once get_template_directory() . '/lib/plugins.php';
require_once get_template_directory() . '/lib/scripts.php';
require_once get_template_directory() . '/lib/snippets/update-nag.php';
require_once get_template_directory() . '/lib/snippets/hide-gallery-settings.php';
require_once get_template_directory() . '/lib/snippets/permalink-format.php';
require_once get_template_directory() . '/lib/snippets/automatic-featured-image.php';
require_once get_template_directory() . '/lib/snippets/exclude-uncategorized.php';
require_once get_template_directory() . '/lib/snippets/remove-generator.php';

/* ==|== Features =========================================================== */
add_theme_support('post-thumbnails');

require_once get_template_directory() . '/lib/sidebars.php';

register_nav_menus(array(
  'global_header_line1' => 'Global Header, Line 1',
  'global_header_line2' => 'Global Header, Line 2',
));

/* ==|== Output Generation ================================================== */

