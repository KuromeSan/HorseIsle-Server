<?php
$server_ip = '127.0.0.1';
$server_port = 12321;

$dbname = 'beta';
$dbuser = 'root';
$dbpass = 'test123';
$dbhost = '127.0.0.1';

# Used for master-site to communicate with game-sites,
# Should be set to the same value on all game sites and the master site.
# NOTE: if someone knows this secret they can create accounts with ADMIN privledges!
$hmac_secret = "!!NOTSET!!"; 

# Password for /web/admin
$admin_portal_password = "!!NOTSET!!";
?>
