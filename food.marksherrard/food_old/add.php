
<?php

/*** begin the session **/
session_start();

if(!isset($_SESSION['user_id']))
{
   header('Location: login.php'); 
}

else
{
    try
    {
        /*** connect to database ***/
        /*** mysql hostname ***/
      /*** connect to database ***/
    /*** mysql hostname ***/
    $mysql_hostname = 'localhost';

    /*** mysql username ***/
    $mysql_username = 'winterma_mark1';

    /*** mysql password ***/
    $mysql_password = 'dinger';

    /*** database name ***/
    $mysql_dbname = 'winterma_tnd';



        /*** select the users name from the database ***/
        $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
        /*** $message = a message saying we have connected ***/

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the insert ***/
        $stmt = $dbh->prepare("SELECT phpro_username FROM phpro_users 
        WHERE phpro_user_id = :phpro_user_id");

        /*** bind the parameters ***/
        $stmt->bindParam(':phpro_user_id', $_SESSION['user_id'], PDO::PARAM_INT);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $phpro_username = $stmt->fetchColumn();

        /*** if we have no something is wrong ***/
        if($phpro_username == false)
        {
            $message = 'Access Error';
        }
        else
        {
            $message = 'Welcome '.$phpro_username;
        }
    }
    catch (Exception $e)
    {
        /*** if we are here, something is wrong in the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
}

?>
<?
if( $_POST )
{
   $con = mysql_connect("localhost","winterma_mark1","dinger");
 
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
 
 mysql_select_db("winterma_tnd", $con);



 

 
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>food.marksherrard.com</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
          
    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/styles.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
             <img alt="Brand" src="images/icon.png" height="30px">
          </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>

            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php" role="tab" data-toggle="tab">
                        List <span class="label label-success"><?php echo $count_rows ?></span>
                    </a>
                </li>
                <li><a href="map.php" role="tab" data-toggle="tab">Map</a>

                </li>
                
            </ul>
            <ul class="nav navbar-nav navbar-right" >
             <?php
                 if(!isset($_SESSION['user_id']))
                    {
                        ?>
                       <a type="button" class="btn btn-warning navbar-btn btn-block" href="login.php"> Login</a></a>
                        <?
                    }
                    else
                    {
                        ?>
                         <a type="button" class="btn btn-danger navbar-btn btn-block" href="add.php"> Add</a></a>
                         
                        <?
                  
                    }
                        ?>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
   <?php
$Name = $_POST["Name"];
$Type = $_POST["Type"];
$Food = $_POST["Food"];
$Address = $_POST["Address"];
$City = $_POST["City"];
$State = $_POST["State"];
$ZIP = $_POST["ZIP"];
$Area = $_POST["Area"];
$Rating = $_POST["Rating"];
$Price = $_POST["Price"];
$Notes = $_POST["Notes"];
$wishlist = $_POST["wishlist"];

if (!isset($_POST['submit'])) { // if page is not submitted to itself echo the form
?>
<div class="container">
        <div class="content-container clearfix">
 <div class="row">
            <div class="col-lg-12">
<form class="form-horizontal" method="post" action="<?php echo $PHP_SELF;?>">
  
  <!--
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label" style="color:black;font-size:12px;">Name</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="propertyTurn" placeholder="Name" name="Name">
    </div>
  </div>
  -->

    <div class="form-group">
    <label class="col-sm-3 control-label" for="exampleInputEmail1" style="color:black;font-size:12px;">Cuisine</label>
      <div class="col-sm-5">
     <select class="form-control" name="Food">
<option>American</option>
<option>BBQ</option>
<option>Brewery</option>
<option>Chinese</option>
<option>Mexican</option>
<option>Peruvian</option>
<option>Hungarian</option>
<option>Indian</option>
<option>Turkish</option>
<option>Spanish</option>
<option>Pub</option>
<option>Pizza</option>
<option>Italian</option>
<option>Sushi</option>
<option>Thai</option>
<option>Other</option>
</select>
  </div>
  </div>


<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label" style="color:black;font-size:12px;">Address</label>
    <div class="col-sm-5">
    

      <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places&amp;extensions=review_summary" type="text/javascript"></script>

<script type="text/javascript">
    function initialize() {
        var input = document.getElementById('searchTextField');
        var autocomplete = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            document.getElementById('name').value = place.name;
            document.getElementById('cityLat').value = place.geometry.location.lat();
            document.getElementById('cityLng').value = place.geometry.location.lng();
            document.getElementById('googlePlaceID').value = place.place_id;
              document.getElementById('gPrice').value = place.price_level;
                document.getElementById('gRating').value = place.rating;

                document.getElementById('gReview').value = place.reviews[0].text;
                //document.getElementById('gReview').value = place.types[1];

            //alert("This function is working!");
            //alert(place.name);
           // alert(place.address_components[0].long_name);

        });
    }
    google.maps.event.addDomListener(window, 'load', initialize); 
</script>

<input id="searchTextField" type="text" style="width: 100%;" placeholder="Enter a location" autocomplete="on" runat="server" name="Address" />  
<input type="" id="name" name="name" />
<input  type="hidden" id="cityLat" name="cityLat" />
<input  type="hidden" id="cityLng" name="cityLng" />  
<input  type="hidden" id="googlePlaceID" name="googlePlaceID" />  
<input  type="hidden" id="gPrice" name="gPrice" /> 
<input  type="hidden" id="gRating" name="gRating" /> 
<input  type="hidden" id="gReview" name="gReview" /> 
    </div>
  </div>

  
  <div class="form-group">
    <label class="col-sm-3 control-label" style="color:black;font-size:12px;" for="exampleInputEmail1">Area/District</label>
     <div class="col-sm-5">
    <select class="form-control" name="Area">
<option>Bernal Heights</option>
<option>The Castro</option>
<option>Chinatown</option>
<option>Cole Valley</option>
<option>Deco Ghetto</option>
<option>Fisherman's Wharf</option>
<option>Golden Gate Park</option>
<option>The Haight</option>
<option>Hayes Valley</option>
<option>Inner Richmond</option>
<option>Inner Sunset</option>
<option>The Financial District</option>
<option>The Marina</option>
<option>The Mission</option>
<option>Mission to Potrero</option>
<option>Dolores and Valencia Corridor</option>
<option>24th Street</option>
<option>Nob Hill</option>
<option>Noe Valley</option>
<option>North Beach</option>
<option>Outer Richmond</option>
<option>Outer Sunset</option>
<option>Pacific Heights</option>
<option>Potrero Hill</option>
<option>Russian Hill</option>
<option>SoMa</option>
<option>Tenderloin</option>
<option>Union Square</option>
<option>Western Addition</option>
<option>Los Altos</option>
  
</select>
  </div>
  </div>



<!--
<div class="form-group">
<label for="exampleInputEmail1" class="col-sm-3 control-label" style="color:black;font-size:12px;">Price</label>
 
    
     <div class="col-sm-7">
<div class="btn-group" data-toggle="buttons">
  <label class="btn btn-default">
    <input name="Price" id="option1" value="1" type="radio"> $
  </label>
  <label class="btn btn-default">
    <input name="Price" id="option2" value="2" type="radio"> $$
  </label>
  <label class="btn btn-default">
    <input name="Price" id="option3" value="3" type="radio"> $$$
  </label>
   <label class="btn btn-default">
    <input name="Price" id="option3" value="4" type="radio"> $$$$
  </label>
</div>
</div>


</div>
-->
<!--
  <div class="form-group text-center">
  <label class="checkbox-inline" id='example' data-toggle="tooltip" data-placement="top" title="Add to our Wishlist - places we haven't been to yet">
  <input name="wishlist" type="checkbox" id="inlineCheckbox1" value="1"> Add to wishlist?
</label>
</div>



  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label" style="color:black;font-size:12px;">Comments</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="propertyTurn" rows="3" placeholder="Optional..." name="Notes">
    </div>
  </div>
  
  <?
  if(empty($Notes)) {

  }
  else
  {

  }
  ?>
 
-->

<div class="form-group text-center">
 <button type="submit"  name="submit" class="btn btn-success btn-block visible-xs">Submit</button> 
 <button type="submit"  name="submit" class="btn btn-success hidden-xs">Submit</button>
 &nbsp; <a href="index.php">cancel</a>
</div>
</form>
</div>
</div>
      <?
//$Name=stripcslashes($_POST['name']);
     // $Name=addslashes($_POST['name']);
$Name=stripslashes(ereg_replace('"','&#34;',($_POST['name'])));
     // $Name=str_replace("'", "&#039;", $_POST['name']);

} else {

$address = $_POST["Address"]; // Your address
   $replace_str = array('"', "'", ",","#","&"); 
            $removeSpecialChars = str_replace($replace_str, '', $address);
            $prepAddr = str_replace(' ','+',$address);

            $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');

            $output= json_decode($geocode);

            // $lat = $output->results[0]->geometry->location->lat;
             //$lng = $output->results[0]->geometry->location->lng;

     $googleImage = file_get_contents('https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference='.$_POST['gref'].'&key=AIzaSyD0a1peLQXR0AzenMhDrT5IPy4DBnQMxJw');



 $query = "
INSERT INTO `winterma_tnd`.`Place` (`ID`, `Name`, `Type`, `Food`, `Address`, `Area`, `Rating`, `Price`, `Date Added`, `Notes`, `wishlist`, `lat`, `lng`, `googlePlaceID`, `googleIcon`,`gImage`) 
VALUES (NULL, '".mysql_real_escape_string($Name)."', '$Type', '$Food', '".mysql_real_escape_string($Address)."', '$Area', '".$_POST['gRating']."', '".$_POST['gPrice']."', '". date('Y-m-d') ."', '".$_POST['gReview']."', '$wishlist', '".$_POST['cityLat']."', '".$_POST['cityLng']."','".$_POST['googlePlaceID']."','".$_POST['gref']."','$gImage');";

  mysql_query($query);

          

  

  echo "<div class='alert alert-success' role='alert' style='padding-top:20%;'>Well done! You successfully added <strong>".$Name."</strong></div>";
  echo "<a href='index.php'>Home</a>";



  mysql_close($con);
}
?> 



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
  $(document).ready(function() {
  $('#example').tooltip();
});
</script>

</body>

</html>
