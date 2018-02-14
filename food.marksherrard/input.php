<?php include ("connect.php"); ?>
<?php include ("header.php"); ?>
 <div class="container">
      <div class="row">
        <div class="col-lg-12">
<?php
$Name =  mysqli_real_escape_string($connect, $_POST["name"]);
$Types = mysqli_real_escape_string($connect, $_POST["types"]);
$Food = $_POST["food"];
$Address = mysqli_real_escape_string($connect, $_POST["formatted_address"]);
$City = mysqli_real_escape_string($connect, $_POST["locality"]);
$State = $_POST["administrative_area_level_1"];
$ZIP = $_POST["postal_code"];
$Area = mysqli_real_escape_string($connect, $_POST["neighborhood"]);
$Rating = 0;
if($_POST["price_level"] =='undefined') {
	$Price = 99;
}
else 
{
	$Price = $_POST["price_level"];
}
$Notes = mysqli_real_escape_string($connect, $_POST["notes"]);
$wishlist = 0;


 $query = "
INSERT INTO `$database`.`Place` (`ID`, `Name`, `Type`, `Food`, `Address`, `City`, `State`, `Zip`, `Area`, `Price`, `Date Added`, `Notes`, `wishlist`, `lat`, `lng`, `googlePlaceID`, `url`, `icon`)
VALUES (
NULL, 
'$Name',
'$Types',
'$Food',
'$Address',
'$City',
'".$_POST['administrative_area_level_1']."',
'".$_POST['postal_code']."',
'$Area',
'$Price',
'". date('Y-m-d') ."',
'$Notes',
'$wishlist', 
'".$_POST['lat']."',
'".$_POST['lng']."',
'".$_POST['place_id']."',
'".$_POST['url']."',
'".$_POST['icon']."'
);";

echo $query;
  mysqli_query($connect, $query);
  echo "<div class='alert alert-success' role='alert' style=''>Well done! You successfully added <strong>".$Name."</strong></div>";
  echo "You will automatically be redirected <a href='index.php'>home</a> in 3 seconds...";

?> 
<?php include ("footer.php"); 
  header('Refresh: 3; URL=http://food.marksherrard.com/index.php');

?>
</div>
</div>
</div>