<?php
session_start();
if (!$_SESSION['csrf_token']) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
  $token = $_SESSION['csrf_token'];
}
if(!empty($_SESSION['userid'])) {
$users = new User();
dump($users->currentUser($_SESSION['userid']));
}
$login = true;
include('includes/header.php');
?>
      <div id="loginbox">

        <form id="loginform" class="form-vertical" action="login.php" method="post">
          <div class="control-group normal_text">
            <h3>
              <img src="/assets/img/logo.png" alt="Logo" />
            </h3>
          </div>
          <div class="alert alert-block"> <!--<a class="close" data-dismiss="alert" href="#">×</a>-->
                <h4 class="alert-heading">Attention!</h4>
                Please make sure to use proper spelling and casing of your username!<br />
              We also advise using the same username as your <u><strong>CMDR</strong> name</u> for both here and discord.</div>
          <div class="control-group">
            <div class="controls">
              <div class="main_input_box">
                <span class="add-on bg_lg">
                  <i class="icon-user">
                  </i>
                </span>
                <input type="hidden" value="<?=$token?>" name="token"/>
                <input type="text" placeholder="Username" name="username"/>
              </div>
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <div class="main_input_box">
                <span class="add-on bg_ly">
                  <i class="icon-lock">
                  </i>
                </span>
                <input type="password" placeholder="Password" name="password"/>
              </div>
            </div>
          </div>
          <div class="form-actions">
            <span class="pull-left">
                  <a href="" data-content="Only <strong>Lavigny's Legion and allies</strong> may request access. Others will be denied!" data-placement="right" data-toggle="popover" data-trigger="hover" class="btn btn-info">Request Access</a>
            </span>
            <span class="pull-right">
              <button class="btn btn-success" name="submit">Login</button>
            </span>
          </div>
        </form>
      </div>
<?php include('includes/footer.php'); ?>
