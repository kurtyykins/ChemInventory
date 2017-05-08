<?php

$pagetitle = "Chemical Inventory - Lookup";

 ob_start();
 session_start();
 require_once $_SERVER['DOCUMENT_ROOT'].'/datafiles/dbconnect.php';
 Require $_SERVER['DOCUMENT_ROOT'].'/header.php';
 Require $_SERVER['DOCUMENT_ROOT'].'/datafiles/sessionrequire.php';
 Require $_SERVER['DOCUMENT_ROOT'].'/datafiles/navbar.php';

if(isset($_POST["btn-imagesubmit"])) {

//Upload the file
$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['image-file']['name']); 

if(move_uploaded_file($_FILES['image-file']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['image-file']['name']). " has been uploaded";
    header("Location: /datafiles/lookupchemical.php?file=".$target_path);
} else{
    echo "There was an error uploading the file, please try again!";
}


}

?>

<body>
<div class="container">

<div class="col-md-12">
   <div>
      <h2 class="">Chemical Lookup</h2>
   </div>
   <hr />
</div>



<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data">
   <input id="image-file" name="image-file" type="file" accept="image/*" capture="camera" />
   <p></p>
   <button type="submit" class="btn btn-block btn-primary" name="btn-imagesubmit">Go</button>
</form>
 



</body>
 
</html>