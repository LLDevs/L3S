<?php

if (!isset($_SESSION['userid']) || $_SESSION['userid'] != false){ //change this to use cookies
	header('Location:index.php');
}
include('includes/header.php');
?>
