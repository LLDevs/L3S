<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/includes/header.php');

?>
<div id="content">
<div id="content-header">
  <?=breadcrumbs()?>
  <h1>Create New User</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span3"></div>
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Member's Info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Username :</label>
              <div class="controls">
                <input type="hidden" value="<?=$_SESSION['csrf_token']?>" name="token">
                <input type="text" class="span11" placeholder="Username" name="username">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password input</label>
              <div class="controls">
                <input type="password" class="span11" placeholder="Enter Password" name="password">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">CMDR Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="ED IGN" name="cmdr">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Discord :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="name#1234" name="discord">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Active</label>
              <div class="controls">
                <select name="activeSelect">
                  <option selected></option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success" name="submit" value="submit">Save</button>
            </div>
          </form>
          <?php
          $user = new User();
          $join = date("Y-m-d H:i:s");
          if(isset($_POST['submit'])) {
            $token = $_POST['token'];
            $username = $_POST["username"];
            $password = crypt($_POST["password"], HASH);
            $cmdr = $_POST["cmdr"];
            $discord = $_POST["discord"];
            $active = $_POST["activeSelect"];
            if(hash_equals($token, $_SESSION['csrf_token'])) {
              if($user->addUser($username,$password,$cmdr,$discord,$join,$active)) {
                echo "User Created!";
              }
            }
          }


          ?>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
<?php
require_once ($_SERVER["DOCUMENT_ROOT"].'/includes/footer.php'); ?>
