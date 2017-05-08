<?php

$pagetitle = "Chemical Inventory - Log In";

 ob_start();
 session_start();
 require_once $_SERVER['DOCUMENT_ROOT'].'/datafiles/dbconnect.php';
 Require $_SERVER['DOCUMENT_ROOT'].'/header.php';
 
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("location: /home.php");
  exit;
 }
 
require_once $_SERVER['DOCUMENT_ROOT'].'/datafiles/checklogin.php';

?>

<body>
<div class="container">

<div class="col-md-12">
   <div>
      <h2 class="" style="text-align: center;">Loughborough Inorganic Chemical Inventory</h2>
   </div>
</div>
<div id="login-form">
   <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
      <div class="col-md-12">
         <div class="form-group">
            <hr />
         </div>
         <?php if ( isset($errMSG) ) { ?>
         <div class="form-group">
            <div class="alert alert-danger">
               <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
            </div>
         </div>
         <?php   }?>
         <div class="form-group">
            <div class="input-group">
               <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
               <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $name; ?>" maxlength="40" />
            </div>
         </div>
         <div class="form-group">
            <div class="input-group">
               <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
               <input type="password" name="pass" class="form-control" placeholder="Password" maxlength="15" />
            </div>
         </div>
         <div class="form-group">
            <hr />
         </div>
         <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
         </div>
         <div class="form-group">
            <hr />
         </div>
      </div>
   </form>
</div>

</div>
</body>

<?php Require $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>