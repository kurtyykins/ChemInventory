<?php

$pagetitle = "Chemical";

 ob_start();
 session_start();
 require_once $_SERVER['DOCUMENT_ROOT'].'/datafiles/dbconnect.php';
 Require $_SERVER['DOCUMENT_ROOT'].'/datafiles/sessionrequire.php';


 $res=mysql_query("SELECT * FROM chemicals WHERE id=" . $_GET['id']);
 $row=mysql_fetch_array($res);

 $id = $row['id'];
 $name = $row['name'];
 $pagetitle = $name;
 $owner = $row['owner'];
 $lab = $row['lab'];
 $location = $row['location'];
 $size = $row['size'];
 $supplier = $row['supplier'];
 $year = $row['year'];
 $comments = $row['comments'];
 $corrosive = $row['corrosive'];
 $environmental = $row['enviromental'];
 $explosive = $row['explosive'];
 $flammable = $row['flammable'];
 $compgas = $row['compgas'];
 $irritant = $row['irritant'];
 $oxidising = $row['oxidising'];
 $toxic = $row['toxic'];
 $health = $row['health'];

Require $_SERVER['DOCUMENT_ROOT'].'/header.php';
Require $_SERVER['DOCUMENT_ROOT'].'/datafiles/navbar.php';
?>

<body>
<div class="container">

<div class="col-md-12">
   <div>
      <h2 class=""><?php echo $name; ?></h2>
   </div>
   <hr />
</div>

<div class="col-md-12">
<div class="col-md-4">

   <table class="table table-bordered">
   <tbody>
               <tr>
                  <td>Owner:</td>
                  <td><?php echo $owner; ?></td>
               </tr>
               <tr>
                  <td>Lab:</td>
                  <td><?php echo $lab; ?></td>
               </tr>
               <tr>
                  <td>Location:</td>
                  <td><?php echo $location; ?></td>
               </tr>
               <tr>
                  <td>Pack Size:</td>
                  <td><?php echo $size; ?></td>
               </tr>
               <tr>
                  <td>Supplier:</td>
                  <td><?php echo $supplier; ?></td>
               </tr>
               <tr>
                  <td>Year of Purchase:</td>
                  <td><?php echo $year; ?></td>
               </tr>
               <tr>
                  <td>Comments:</td>
                  <td><?php echo $comments; ?></td>
               </tr>
            </tbody>
         </table>
</div>

<div class="col-md-4">
   
   <table><tr>
   <?php

   if ($toxic = 1) { echo "<td><img src='../img/toxic.gif'></td>";}
   if ($irritant == 1) { echo "<td><img src='../img/irritant.gif'></td>";}
   if ($flammable == 1) { echo "<td><img src='../img/flammable.gif'></td>";} 
   if ($corrosive == 1) { echo "<td><img src='../img/corrosive.gif'>'</td>";}
   if ($environmental == 1) { echo "<td><img src='../img/environmental.gif'></td>";}
   ?>
</tr><tr>
<?php
   if ($health == 1) { echo "<td><img src='../img/health.gif'></td>";}
   if ($oxidising == 1) { echo "<td><img src='../img/oxidizing.gif'></td>";}
   if ($explosive == 1) { echo "<td><img src='../img/explosive.gif'></td>";}
   if ($compgas == 1) { echo "<td><img src='../img/compgas.gif'></td>";}
?>

</tr></table>
</div>

<?php

$data=$_GET['id'];
$link= "https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=".$data;

?>

<div class="col-md-4">
   <img src='<?php echo $link; ?>'>
</div>


</div>

<?php Require $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>