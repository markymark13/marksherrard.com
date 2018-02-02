<?php
include('config.php');
# connect mysql db
dbConnect();
//$query = "SELECT * FROM `Place` INNER JOIN phpro_users ON Place.phpro_user_id = phpro_users.phpro_user_id where Place.phpro_user_id = '".$_GET["ID"]."'  Order by ID Desc ";
$countlast10 = mysql_query("SELECT * FROM  `Place` WHERE  `Date Added` >= DATE( NOW( ) ) - INTERVAL 7 DAY LIMIT 0 , 30 ");
$count_rows = mysql_num_rows($countlast10);
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
                    <a href="#inbox" role="tab" data-toggle="tab">
                        List <span class="label label-success"><?php echo $count_rows ?></span>
                    </a>
                </li>
                <li><a href="#sent-mail" role="tab" data-toggle="tab">Map</a>

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
                         <a type="button" class="btn btn-danger navbar-btn btn-block" href="add.php"> Login</a></a>
                         
                        <?
                   echo $message;
                    }
                        ?>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<div class="container">
        <div class="content-container clearfix">
<h2>Login Here</h2>
<form action="login_submit.php" method="post">
<fieldset>
<p>

  <div class="row">
<div class="col-md-3">
<label for="phpro_username">Username</label>
<input type="" class="form-control" id="phpro_username" name="phpro_username" value="" maxlength="20" />
</div>
</div>

  <div class="row">
<div class="col-md-3">
<label for="phpro_password">Password</label>
<input type="password" class="form-control" id="phpro_password" name="phpro_password" value="" maxlength="20" />
</div>
</div>
<p>
</p>
<input type="submit" class="btn btn-success btn-block visible-xs" value="Login" />
<input type="submit" class="btn btn-success hidden-xs" value="Login" />
</p>
<a href="adduser.php">create account</a>
</fieldset>
</form>
</div>
</div>
</body>
</html>