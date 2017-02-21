<?php include('includes/header.php');
// if(empty($_SESSION['userid'])) {
// session_start();
// // $_SESSION['userid'] = 1;
// if (! isset($_SESSION['csrf_token'])) {
// $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
// }
// }

$users = new User();
dump($users->currentUser($_SESSION['userid']));
?>
      <div id="loginbox">

        <form id="loginform" class="form-vertical" action="index.html">
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
                <input type="text" placeholder="Username" />
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
                <input type="password" placeholder="Password" />
              </div>
            </div>
          </div>
          <div class="form-actions">
            <span class="pull-left">
              <a title="" id="example3" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-toggle="popover" class="btn btn-success" href="" data-original-title="Popover on bottom">Popover on bottom</a>
            </span>
            <span class="pull-right">
              <a type="submit" href="index.html" class="btn btn-success" /> Login</a>
            </span>
          </div>
        </form>
        <form id="recoverform" action="#" class="form-vertical">
          <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
          <div class="controls">
            <div class="main_input_box">
              <span class="add-on bg_lo">
                <i class="icon-envelope">
                </i>
              </span>
              <input type="text" placeholder="E-mail address" />
            </div>
          </div>
          <div class="form-actions">
            <span class="pull-left">
              <a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a>
            </span>
            <span class="pull-right">
              <a class="btn btn-info"/>Reecover</a>
            </span>
          </div>
        </form>
      </div>
<?php include('includes/footer.php'); ?>
