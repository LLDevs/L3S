<?php
session_start();
if (!isset($_SESSION['csrf_token'])) { //should be on every page? maybe in header?
  $_SESSION['csrf_token'] = hash('sha512', 'MfGcfqz6VO8VbHM2YS0f');
}
  $token = $_SESSION['csrf_token'];

if (!isset($_SESSION['usertype']) || $_SESSION['usertype'] != false){ //change this to use cookies
	header('Location:index.php');
}
include('includes/header.php');
?>