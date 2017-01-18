<?php
session_start();
require_once 'Facebook/Facebook/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '598715596980336', // Replace {app-id} with your app id
  'app_secret' => '2a9aaaefe002916e6b5bee05f4ebed39',
  'default_graph_version' => 'v2.2',
  ]);
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/nepal/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>