<?php
require_once 'db.php';
//Thanks Knoble for the code example


// class Permissions extends Database {
//   $db = new Dataabse();
//   public functon getUser($username, $password) {
//     $encrypt_pass = crypt($password, $salt);
//     // $db->query("SELECT * FROM users where username='$username' AND password='$encrypt_pass'")
//     // $db->execute();
//     // $userInfo = $db->single();
//   }
// }
$join = date("Y", strtotime('+1286 years'))
$encrypt_pass = crypt('test', $salt);
echo $encrypt_pass;
