<?php
/**
 * WordPress Administration Generic POST Handler.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** We are located in WordPress Administration Panels */
define('WP_ADMIN', true);

if ( defined('ABSPATH') )
	require_once(ABSPATH . 'wp-load.php');
else
	require_once('../wp-load.php');

require_once(ABSPATH . 'wp-admin/includes/admin.php');

if ( !wp_validate_auth_cookie() )
	wp_die(__('Cheatin&#8217; uh?'));

nocache_headers();

do_action('admin_init');

$action = 'admin_post';
if ( !empty($_REQUEST['action']) )
	$action .= '_' . $_REQUEST['action'];

do_action($action);

?>