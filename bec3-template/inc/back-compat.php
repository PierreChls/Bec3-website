<?php
	
	/* @theme BeC3-Theme */

?>

<?php
function bec3_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'bec3_upgrade_notice' );
}
add_action( 'after_switch_theme', 'bec3_switch_theme' );



function bec3_upgrade_notice() {
	$message = sprintf( __( 'Twenty Fifteen requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'bec3' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}



function bec3_customize() {
	wp_die( sprintf( __( 'Twenty Fifteen requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'bec3' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'bec3_customize' );



function bec3_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Twenty Fifteen requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'bec3' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'bec3_preview' );
