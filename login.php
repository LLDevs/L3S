<?php
require_once 'classes/users.php';
session_start();
$users = new User();
if(isset($_POST['submit'])) {
  if(hash_equals($_POST['token'], $_SESSION['csrf_token'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $userinfo = $users->getUser($username,$password);

  if(!$userinfo) {
    echo 'Wrong user or pass';
  } else {
    $_SESSION['userid'] = $userinfo['id'];//should set the user type. where else is this used?
    header("Location: index.php");
  }
  } else {
    header("Location: main.php");
  }
}
