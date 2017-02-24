<?php

if (!isset($_SESSION['usertype']) || $_SESSION['usertype'] != false){ //change this to use cookies
	header('Location:index.php');
}
include('includes/header.php');
?>
