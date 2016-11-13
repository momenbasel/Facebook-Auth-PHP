
<?php
error_reporting(0);
session_start();
require_once 'vendor/autoload.php';

$fb = new FacebookFacebook(["app_id" => '(your_app_id)', 'app_secret' => '(your_App_secret)', 'default_graph_version' => 'v2.8'



]);
$callback = 'http://localhost/facebookAuth/index.php';
$helper = $fb->getRedirectLoginHelper('http://localhost/facebookAuth/index.php');
try
{
	if ($session = $helper->getAccessToken())
	{
		$_SESSION['facebook'] = $session;
		$_SESSION['flash'] = 'Thank you for sign in.';
		header('Location: index.php');

		// redirect back to index page.

	}
}

catch(FacebookExceptionsFacebookSDKException $e)
{

	// There was an error communicating with Facebook Graph

	echo $e->getMessage();
	exit;
}
