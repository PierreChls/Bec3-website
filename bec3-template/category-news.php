<?php 

$site_url  =  get_site_url();
$site_url .=  "/news/";

wp_redirect( $site_url, 301 ); exit;

?>