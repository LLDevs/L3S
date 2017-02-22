<?php
session_start();
require_once 'classes/users.php';
if(isset($_POST['submit'])) {
  if(hash_equals($_POST['token'], $_SESSION['csrf_token'])) {
  $users = new User();
  $username = $_POST['username'];
  $password = $_POST['password'];
  $userinfo = $users->getUser($username,$password);
  if(!$userinfo) {
    echo 'Wrong user or pass';
  } else {
    $_SESSION['userid'] = $userinfo['id'];
    header("Location: index.php");
  }
} else {
  header("Location: index.php");
}
}
