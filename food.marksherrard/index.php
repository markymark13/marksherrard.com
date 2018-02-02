<?php
include ("connect.php");
include ("header.php");
$query=mysqli_query($connect,"SELECT * FROM `Place` Order by ID Desc");
?>
<div id="hacker-list">
  <div class="container main">
    <div class="content-container clearfix">
      <div class="col-md-12">
        <input type="search" placeholder="Search by cuisine, name, or area" class="search form-control mail-search" />
          <div class="row margin-small" style="padding-top:10px;">
            <small><b>MARK'S RECOMENDED PLACES</b></small>
          </div>
          
          <ul class="list-group list">
          
          <?php while($row = mysqli_fetch_array($query)):
          $Date = date("m/d/y", strtotime($row["Date Added"]));
          $Name = htmlspecialchars($row['Name'],ENT_QUOTES);
          $Type = htmlspecialchars($row['Type'],ENT_QUOTES);
          $Food = htmlspecialchars($row['Food'],ENT_QUOTES);
          $Address = htmlspecialchars($row['Address'],ENT_QUOTES);
          ?>

          <li class="list-group-item">

            <span class="name"><?php echo htmlspecialchars($row['Name'],ENT_QUOTES) ?></span>

            <small> | <?php echo $Food ?> <i><a href='http://www.maps.google.com/maps?q=<?php echo $row["Address"] ?>'>
            
              <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
            
              <span class="mail-subject area"><?php echo $row["Area"] ?></span>

            </small></a></i>

            <?php
            if( strtotime(date("m/d/y", strtotime($row["Date Added"]))) >= strtotime('-7 day')) {
            echo ' <span class="date label label-success hidden-xs" style="float:right;">';
              echo date("m/d/y", strtotime($row["Date Added"]));
            echo '</span>';
            }
            else
            {
            echo ' <span class="date label label-primary" style="float:right;">';
              echo date("m/d/y", strtotime($row["Date Added"]));
            echo '</span>';
            }
            ?>

            <br>
            <small> 
              <span class="mail-message-preview"><?php echo $Notes ?></span>
            </small>

          </li>
          
          <?php endwhile;?>

        </ul>
      </div>
    </div>
  </div>
</div>
<?php include ("footer.php"); ?>