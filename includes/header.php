<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php if(array_key_exists('login', get_defined_vars())) { ?>
<link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="/assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="/assets/css/matrix-login.css" />
<link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="/assets/css/custom.css" />
<?php } else { ?>
<link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="/assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="/assets/css/fullcalendar.css" />
<link rel="stylesheet" href="/assets/css/matrix-style.css" />
<link rel="stylesheet" href="/assets/css/matrix-media.css" />
<link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="/assets/css/jquery.gritter.css" />
<link rel="stylesheet" href="/assets/css/uniform.css" />
<link rel="stylesheet" href="/assets/css/select2.css" />
<link rel="stylesheet" href="/assets/css/custom.css" />
<link rel="shortcut icon" type="image/x-icon" href="/logoicon.ico"/>
</head>
<body>

<?php
require_once ($_SERVER["DOCUMENT_ROOT"].'/includes/nav.php');
}

require_once ($_SERVER["DOCUMENT_ROOT"].'/classes/users.php') ?>
