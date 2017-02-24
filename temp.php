<?php
session_start();
require_once('classes/users.php');
$urank_id = $_SESSION['userinfo']['ranks_id'];
$urank = $_SESSION['userinfo']['ranks_name'];


$tester = new Permission();
dump($tester->check($urank_id,'can_add_user'));
echo "<br />";
dump($tester->rank($urank,'Consul'));
