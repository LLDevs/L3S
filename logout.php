<?php
session_start();
if(hash_equals($_POST['token'], $_SESSION['csrf_token'])) {
  session_unset();
  session_destroy();
  header("Location: index.php");
} else {
  header("Location: index.php");
}
