<?php

/*** WordPress Nonces
*A composer package, which serves the functionality working with WordPress Nonces in an object orientated environment.
*Usage
*/
// add to your function lib.php:
// Autoload files using Composer autoload
require __DIR__ . '/vendor/autoload.php';

//Create a nonce
$WPNonce = new \Nditah\WPNonce();
$nonceCreate = $WPNonce -> wp_create_nonce_oop();

// E.g:
// echo "<a href='myplugin.php?do_something=some_action&_wpnonce='.$nonceCreate.'> Do some action </a>";

//Verify a nonce
$WPNonce = new \Nditah\WPNonce();
$nonceVerify = $WPNonce -> wp_verify_nonce_oop();

// Add a nonce to a URL
$WPNonce = new \Nditah\WPNonce();
$nonceUrl = $WPNonce -> wp_nonce_url_oop();

// Add a nonce to a form
$WPNonce = new \Nditah\WPNonce();
$nonceField = $WPNonce -> wp_nonce_field_oop();

//Verify a nonce passed in an AJAX request
$WPNonce = new \Nditah\WPNonce();
$checkAjaxRefer = $WPNonce -> check_ajax_referer_oop();

//Test either if the current request carries a valid nonce, 
// or if the current request was referred from an administration screen
$WPNonce = new \Nditah\WPNonce();
$checkAdminRefer = $WPNonce -> check_admin_referer_oop();

//Display 'Are you sure you want to do this?' message to confirm the action being taken.
$WPNonce = new \Nditah\WPNonce();
$nonceAys = $WPNonce -> wp_nonce_ays_oop();

//Retrieve or display the referer hidden form field
$WPNonce = new \Nditah\WPNonce();
$wpReferField = $WPNonce -> wp_referer_field_oop();
