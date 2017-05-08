<?php

$pagetitle = "Chemical Inventory - Search";

 ob_start();
 session_start();
 require_once $_SERVER['DOCUMENT_ROOT'].'/datafiles/dbconnect.php';
 Require $_SERVER['DOCUMENT_ROOT'].'/header.php';
 Require $_SERVER['DOCUMENT_ROOT'].'/datafiles/sessionrequire.php';
 Require $_SERVER['DOCUMENT_ROOT'].'/datafiles/navbar.php';

?>

<body>


<?php Require $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>