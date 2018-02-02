 <?
/*** begin the session ***/
session_start();
if(!isset($_SESSION['user_id']))
{
    $username = '';
}
else
{
 try
    {
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
</head>

<?php
include('config.php');
# connect mysql db
dbConnect();
$query = "SELECT * FROM `Place` Order by ID Desc ";
//$query = "SELECT * FROM `Place` INNER JOIN phpro_users ON Place.phpro_user_id = phpro_users.phpro_user_id where Place.phpro_user_id = '".$_GET["ID"]."'  Order by ID Desc ";
$countlast10 = mysql_query("SELECT * FROM  `Place` WHERE  `Date Added` >= DATE( NOW( ) ) - INTERVAL 7 DAY LIMIT 0 , 30 ");
$count_rows = mysql_num_rows($countlast10);
$place = mysql_query($query);

$counter = 0;
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
                    <a href="index.php" role="tab">
                        List <span class="label label-success"><?php echo $count_rows ?></span>
                    </a>
                </li>
                <li><a href="map.php" role="tab" >Map</a>

                </li>
                
            </ul>
            <ul class="nav navbar-nav navbar-right margin-small" >
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





  <div id="hacker-list">
      
      <div class="container main">
           <div class="content-container clearfix">
               <div class="col-md-12">

                   
                   <input type="search" placeholder="Search..." class="search form-control mail-search" />
                     <div class="row margin-small" style="padding-top:10px;">
                       <small><b>SORT BY</b></small>
                     </div>
                   <div class="row margin-small" style="padding-top:10px; padding-bottom:10px;  ">
                        
                      
                   <div class="col-md-3"> <span  id="menu-toggle" class="sort btn btn-default btn-block" data-sort="area">Area <i class="glyphicon glyphicon-chevron-up" style="float:right;"></i></span></div>
                       
                      <div class="col-md-3"><span  id="menu-toggle2" class="sort btn btn-default btn-block" data-sort="type">Cuisine <i class="glyphicon glyphicon-chevron-up" style="float:right;"></i></span></div>
                     
                        </div>
                   <ul class="list-group list">


                              <?

                                while($row = mysql_fetch_array($place, MYSQL_ASSOC))
                                {
                                  $id = $row["ID"];
                                $Name = $row["Name"];
                                $Type = $row["Type"];
                                $Food = $row["Food"];
                                $Address = $row["Address"];
                                $City = $row["City"];
                                $State = $row["State"];
                                $ZIP = $row["Area"];
                                $Area = $row["Area"];
                                $Rating = $row["Rating"];
                                $Price = $row["Price"];
                                $Date = date("m/d/y", strtotime($row["Date Added"]));
                                $Notes = $row["Notes"];
                                $Vote = $row["vote"];
                                $user1 = $row["phpro_username"];
                                  $AreaNoSpaces = str_replace(' ', '', $Area);
                                  $Name = htmlspecialchars($row['Name'],ENT_QUOTES);
                                  $Type = htmlspecialchars($row['Type'],ENT_QUOTES);
                                  $Food = htmlspecialchars($row['Food'],ENT_QUOTES);
                                  $Address = htmlspecialchars($row['Address'],ENT_QUOTES);

                                ?>


                       <li class="list-group-item">
                        
                                 <span class="name"><?php echo $Name ?></span>
                              <small> | <i><a href='http://www.maps.google.com/maps?q=<? echo $Address ?>'><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><span class="mail-subject area"><?php echo $Area ?></span></small></a></i>
                            <?
                             if ($Food=="Italian") {
echo "<span class='price' style='display:none;'>$Food</span><img src='images/32/Italy.png' style='float:right;'></img>";
}
elseif ($Food=="American" || $Food=="american") {
echo "<span class='type' style='display:none;'>$Food</span><img src='images/32/United States of America(USA).png' style='float:right;'>";
}
elseif ($Food=="German") {
echo "<span class='type' style='display:none;'></span>$Food<img src='images/32/Germany.png' style='float:right;'> ";
}
elseif ($Food=="Tapas") {
echo "<span class='type' style='display:none;'>$Food</span><img src='images/32/Spain.png' style='float:right;'> ";
}
elseif ($Food=="Sushi") {
echo "<span class='type' style='display:none;'>$Food</span><img src='images/32/japan.png' style='float:right;'> ";
}
elseif ($Food=="Hungarian") {
echo "<span class='type' style='display:none;'>$Food</span><img src='images/32/Hungary.png' style='float:right;'> ";
}
elseif ($Food=="Chinese") {
echo "<span class='type' style='display:none;'>$Food</span><img src='images/32/China.png' style='float:right;'> ";
}
elseif ($Food=="Pub") {
echo "<span class='type' style='display:none;'>$Food</span><img src='images/32/homer.png' style='float:right;'> ";
}
elseif ($Food=="Pizza") {
echo "<span class='type' style='display:none;'>$Food</span><img src='images/32/32.png' style='float:right;'>";
}
elseif ($Food=="Thai") {
echo "<span class='type' style='display:none;'>$Food</span><img src='images/32/Thailand.png' style='float:right;'> ";
}
else {
  echo  "<span class='type badge'>$Food</span>";
}
                               
                             
                                if( strtotime($Date) >= strtotime('-7 day') ) {
                                echo ' <span class="date label label-success hidden-xs" style="float:right;">';
                                echo $Date;
                                echo '</span>';
                                 echo ' <span class="date label label-success visible-xs">';
                                echo $Date;
                                echo '</span>';
                                }
                                else
                                {
                                     echo ' <span class="date label label-primary" style="float:right;">';
                                echo $Date;
                                echo '</span>';
                                }
                               
                              
                             
                              ?>
                             
                               <br>
                                <small> <span class="mail-message-preview"><?php echo $Notes ?></span></small>
                          
                       </li>
                                <?
                                }
                                ?>

                      
                   </ul>
               </div>
           </div>
       </div>
      
  </div>
  
  

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script src="js/js.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
    $('.form-control').floatlabel({
        labelClass: 'float-label',
        labelEndTop: 5
    });
});
    </script>
    <!--List.js-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js"></script>
    <script type="text/javascript">
    var options = {
    valueNames: [ 'name', 'area', 'type', 'date'  ]
};

var hackerList = new List('hacker-list', options);
    </script>
    <script type="text/javascript">
$('#menu-toggle').click(function(){
    $(this).find('i').toggleClass('glyphicon-chevron-up').toggleClass('glyphicon-chevron-down');
});
    </script>
     <script type="text/javascript">
$('#menu-toggle2').click(function(){
    $(this).find('i').toggleClass('glyphicon-chevron-up').toggleClass('glyphicon-chevron-down');
});
    </script>
  </body>
</html>