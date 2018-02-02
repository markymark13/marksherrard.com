
<!DOCTYPE html>
<html>
  <head>
    <title>food.marksherrard.com</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- CSS -->
	  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	  <link href="css/styles.css" rel="stylesheet" media="screen">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="js/foursquare.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">
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

                        List <span class="label label-success" data-toggle="tooltip" data-placement="bottom" title="new items added last 7 days"></span>
                    </a>
                </li>
                <li><a href="map.php" role="tab">Map</a>
                </li>
                
            </ul>
            <ul class="nav navbar-nav navbar-right" >
            <?php
                 if(!isset($_SESSION['user_id']))
                    {
                        ?>
                       <a type="button" class="btn btn-warning navbar-btn btn-block" href="login.php"> Login</a></a>
                        <?php
                    }
                    else
                    {
                        ?>
                         <a type="button" class="btn btn-danger navbar-btn btn-block" href="add.php"> Add</a></a>
                         
                        <?php
                  
                    }
                        ?>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
</body>