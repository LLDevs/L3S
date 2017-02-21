<?php
require_once 'classes/users.php';
$users = new User();
if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $userinfo = $users->getUser($email,$password);

  if(!$userinfo) {
    header("Refresh:0; url=index.php");
    ?>
    <script>alert("Wrong username or password! Try again");</script>
    <?php
  } else {
    session_start();
    $_SESSION['userid'] = $userinfo['id'];
    if (! isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    $token = $_SESSION['csrf_token'];
    header("Location: dashboard.php");
  }
} else {
  header("Location: index.php");
}
