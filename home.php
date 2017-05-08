<?php

$pagetitle = "Chemical Inventory - Home";

 ob_start();
 session_start();
 require_once $_SERVER['DOCUMENT_ROOT'].'/datafiles/dbconnect.php';
 Require $_SERVER['DOCUMENT_ROOT'].'/header.php';
 Require $_SERVER['DOCUMENT_ROOT'].'/datafiles/sessionrequire.php';
 Require $_SERVER['DOCUMENT_ROOT'].'/datafiles/navbar.php';


if ($_GET['search'] != ""){
$res=mysql_query("SELECT * FROM chemicals WHERE name LIKE '%".$_GET['search']."%'");
} else {
$res=mysql_query("SELECT * FROM chemicals");
}
$noRes=false;
$count = mysql_num_rows($res);

?>

<body>
<div class="container">

<div class="col-md-12">
   <div>
      <h2 class="">Inventory</h2>
   </div>
   <hr />
</div>

<div class="col-md-12">
  
  <div class="container">
  <form>
    <label for="search">Search: </label>
    <input type="text" name="search" value="<?php echo $_GET['search']; ?>">
    <input type="submit">
  </form>
  <p></p>
  <?php echo "<p>".$count." result(s) found</p>";?>        
  <p></p>
</div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Owner</th>
        <th>Lab</th>
        <th>Location</th>
        <th>Size</th>
        <th>Supplier</th>
        <th>Year</th>
        <th>Details</th>
      </tr>
    </thead>
    <tbody>
<?php

if ($count > 0) {
    // output data of each row
    while($row=mysql_fetch_array($res)) {
    echo "<tr>";
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['owner']."</td>";
    echo "<td>".$row['lab']."</td>";
    echo "<td>".$row['location']."</td>";
    echo "<td>".$row['size']."</td>";
    echo "<td>".$row['supplier']."</td>";
    echo "<td>".$row['year']."</td>";
    echo "<td><a href='../chemical.php?id=".$row['id']."'>View</a></td>";
    echo "</a></tr>";
    }

} elseif ($count = 0) {
    $noRes=false;
    
}

?>
</tbody>
</table>

</div>



</div>

</div>
</body>

<?php Require $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>