<?php
//config.php
require_once 'vendor/autoload.php';
$google_client = new Google_Client();
$google_client->setClientId('930064145443-o29ua4t329poqu6ij8uv0tlhutcep8le.apps.googleusercontent.com');
$google_client->setClientSecret('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');
$google_client->setRedirectUri('http://localhost/beka/home_page.php');

$google_client->addScope('email');
$google_client->addScope('profile');


session_start();

?>