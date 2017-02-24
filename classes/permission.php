<?php
require_once 'db.php';
require_once 'functions.php';


class Permission extends Database
{
  public function check($rankIds, $perm)
  {
    $rankIds = explode(",",$rankIds);
    foreach($rankIds as $rid)
    {
      $sql = "SELECT permission_name FROM rank_permissions WHERE prank_id='$rid' AND permission_name='$perm'";
      $query = $this->prepare($sql);
      $query->execute();
      $permission = $query->fetch(PDO::FETCH_ASSOC);
      if($permission['permission_name'] == $perm)
      {
        return true;
      }
    }
  }

  public function rank($ranks, $rank)
  {
    $ranks = explode(",",$ranks);
    $rank = explode(",",$rank);
    foreach($ranks as $rname)
    {
      foreach($rank as $rname1)
      {
        if($rname == $rname1)
        {
          return true;
        }
      }
    }
  }
}
