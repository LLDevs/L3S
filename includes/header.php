<?php
session_start();
$urlPath = explode("/",parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if($urlPath[1] == "") {
  $login = true;
}
require_once ($_SERVER['DOCUMENT_ROOT'].'/classes/users.php') ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<link rel="shortcut icon" type="image/x-icon" href="logoicon.ico"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php if(isset($login)) { ?>
  <link rel="stylesheet" href="/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="/css/matrix-login.css" />
<link rel="stylesheet" href="font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" />
<?php } else { ?>
  <link rel="stylesheet" href="/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="font-awesome/css/font-awesome.css" />
  <link rel="stylesheet" href="/css/fullcalendar.css" />
  <link rel="stylesheet" href="/css/matrix-style.css" />
  <link rel="stylesheet" href="/css/matrix-media.css" />
  <link rel="stylesheet" href="/css/jquery.gritter.css" />
  <link rel="stylesheet" href="/css/uniform.css" />
  <link rel="stylesheet" href="/css/select2.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" />
  <link rel="stylesheet" href="/css/custom.css" />
  <?php } ?>
</head>
<body>

<?php


if(!isset($login)) {
	include('nav.php');
}

?>
