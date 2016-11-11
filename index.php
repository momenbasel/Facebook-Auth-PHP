<?php
require_once 'app/init.php';

error_reporting(0);

if (isset($_SESSION['flash']))
	{
	echo $_SESSION['flash'];
	session_destroy($_SESSION['flash']);
	}

$loginUrl = $helper->getLoginUrl($callback);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facebook Login Page</title>
</head>
<body>
<?php

if (!isset($_SESSION['facebook']))
	{
	echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
	}
  else
	{
	echo '<a href="signout.php">Signout </a>';
	}

?>
</body>
</html>