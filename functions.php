<?php

function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function favicon_link() {
	echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );

/**
 * Log login failures with SYSLOG to avoid monitoring the huge access.log.
 * credit to http://wireflare.com/wordpress-login-security-fail2ban/
 */
const SYSLOG_FACILITY = LOG_LOCAL1;

add_action('wp_login_failed', 'log_failed_attempt');

function log_failed_attempt( $username ) {
	openlog( 'wordpress('.$_SERVER['HTTP_HOST'].')', LOG_NDELAY|LOG_PID, SYSLOG_FACILITY);
	syslog( LOG_NOTICE, "Wordpress authentication failure for $username from {$_SERVER['REMOTE_ADDR']}" );
}
