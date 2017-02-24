<?php
require_once 'permission.php';
define("HASH", "tm4O5sqiW9C3n26WMG96woL0v07yybO9");

if(!empty($_SESSION['csrf_token']) && !empty($_SESSION['userid']))
{
  $currentId = $_SESSION['userid'];
}
else
{
  $currentId = 0;
}
date_default_timezone_set('UTC');
//Thanks Knoble for the code example

class User extends Database
{
  public function getUser($username, $password)
  {
    $encrypt_pass = crypt($password, HASH);
    $sql = "SELECT * FROM users where username='$username' AND password='$encrypt_pass'";
    $query = $this->prepare($sql);
    $query->execute();
    $userInfo = $query->fetch(PDO::FETCH_ASSOC);

    if(!empty($userInfo))
    {
      return $userInfo;
    }
    else
    {
      return false;
    }
  }//end of getUser

  public function addUser($username, $password, $cmdr_name, $discord, $join_date, $active)
  {
    $encrypt_pass = crypt($password, HASH);
    $sql = "INSERT INTO users (username, password, cmdr_name, discord, join_date, active) VALUES(:username, :password, :cmdr_name, :discord, :join_date, :active)";
    $query = $this->prepare($sql);
    $query->bindValue(":username", $username);
    $query->bindValue(":password", $encrypt_pass);
    $query->bindValue(":cmdr_name", $cmdr_name);
    $query->bindValue(":discord", $discord);
    $query->bindValue(":join_date", $join_date);
    $query->bindValue(":active", $active);

    if($query->execute())
    {
      return "User has been added.";
    }
    else
    {
      return false;
    }
  }//end of addUser

  public function removeUser($userId)
  {
    $sql = "DELETE FROM users WHERE id ='$userId'";
    $query = $this->prepare($sql);

    if($query->execute())
    {
      return "User with ID: {$userId}, has been removed.";
    }
  }//end removeUser

  public function getAllUsers()
  {
    $sql = "SELECT * FROM users";
    $query = $this->prepare($sql);
    $query->execute();
    while($users = $query->fetch(PDO::FETCH_ASSOC))
    {
      $userinfo[] = $users;
    }

    if(!empty($userinfo))
    {
      return $userinfo;
    }
    else
    {
      return false;
    }
  }//end getAllUsers

  public function updateUser($username, $password, $cmdr_name, $discord, $join_date, $modified_date, $active)
  {
    $encrypt_pass = crypt($password, HASH);
    $sql = "UPDATE users SET username='$username', password='$encrypt_pass', cmdr_name='$cmdr_name', discord='$discord', join_date='$join_date', modified_date='$modified_date', active='$active')";
    $query = $this->prepare($sql);
    if($query->execute())
		{
			return "Update Successful.";
		}
  }//end of updateUser

  public function currentUser($currentId)
  {
    $sql = "SELECT * FROM users WHERE id='$currentId'";
    $query = $this->prepare($sql);
    $query->execute();
    $userData = $query->fetch(PDO::FETCH_ASSOC);
    if(!empty($userData))
    {
      return $userData;
    }
  }

  public function getAllUserInfo($userId)
  {
    $sqlUser = "SELECT * FROM users WHERE id='$userId'";
    $queryUser = $this->prepare($sqlUser);
    $queryUser->execute();
    $queryUserResult = $queryUser->fetch(PDO::FETCH_ASSOC);
    foreach($queryUserResult as $key => $value)
    {
      $userInfo[$key] = $value;
    }

    $userId = $userInfo['id'];
    $sqlRank = "SELECT rank_name FROM user_ranks,ranks WHERE user_ranks.userid ='$userId' AND user_ranks.rank_id = ranks.rid";
    $queryRank = $this->prepare($sqlRank);
    $queryRank->execute();
    $items = array();
    foreach($queryRank->fetchAll(PDO::FETCH_ASSOC) as $item)
    {
    $items[] = $item['rank_name'];
  }
  $userInfo['ranks_name'] = implode(',',$items);

    $sqlRankId = "SELECT rank_id FROM user_ranks WHERE user_ranks.userid ='$userId'";
    $queryRankId = $this->prepare($sqlRankId);
    $queryRankId->execute();
    $items1 = array();
    foreach($queryRankId->fetchAll(PDO::FETCH_ASSOC) as $item1)
    {
    $items1[] = $item1['rank_id'];
  }
  $userInfo['ranks_id'] = implode(',',$items1);

    $_SESSION['userinfo'] = $userInfo;

  }

} //end of Class User
