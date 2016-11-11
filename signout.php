<?php
require_once 'app/init.php';

unset($_SESSION['facebook']);
header('Location: index.php');
$_SESSION['flash'] = 'Visit Again!';