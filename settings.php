<?php

$pagetitle = "Chemical Inventory - Settings";

 ob_start();
 session_start();
 require_once $_SERVER['DOCUMENT_ROOT'].'/datafiles/dbconnect.php';
 Require $_SERVER['DOCUMENT_ROOT'].'/header.php';
 Require $_SERVER['DOCUMENT_ROOT'].'/datafiles/sessionrequire.php';
 Require $_SERVER['DOCUMENT_ROOT'].'/datafiles/navbar.php';

?>

<body>
<div class="container">

<div class="col-md-12">
   <div>
      <h2 class="">Settings</h2>
   </div>
   <hr />
</div>


</div>
</body>

<?php Require $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>