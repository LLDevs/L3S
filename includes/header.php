<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php if($_SERVER['REQUEST_URI'] == "/") { ?>
<link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="/assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="/assets/css/matrix-login.css" />
<link rel="stylesheet" href="/assets/css/matrix-style.css" />
<link rel="stylesheet" href="/assets/css/matrix-media.css" />
<link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="/assets/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<?php } else { ?>
<link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="/assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="/assets/css/fullcalendar.css" />
<link rel="stylesheet" href="/assets/css/matrix-style.css" />
<link rel="stylesheet" href="/assets/css/matrix-media.css" />
<link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="/assets/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/x-icon" href="/logoicon.ico"/>
</head>
<body>
<?php }
require_once 'classes/users.php' ?>
