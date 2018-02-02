<?php 
include ("connect.php"); 
# connect mysql db
dbConnect();
$query = "SELECT * FROM `Place` Order by ID Desc ";
$countlast10 = mysqli_query($con, "SELECT * FROM  `Place` WHERE  `Date Added` >= DATE( NOW( ) ) - INTERVAL 7 DAY LIMIT 0 , 30 ");
$count_rows = mysqli_num_rows($countlast10);
$place = mysqli_query($con, $query);
$counter = 0;
?>
<?php include ("header.php"); ?>
<div id="hacker-list">
      
      <div class="container main">
           <div class="content-container clearfix">
               <div class="col-md-12">
                   <input type="search" placeholder="Search by cuisine, name, or area" class="search form-control mail-search" />
                     <div class="row margin-small" style="padding-top:10px;">
                       <small><b>MARK'S RECOMENDED PLACES</b></small>
                    </div>

                   <ul class="list-group list">
                              <?

                                while($row = mysqli_fetch_array($place, MYSQL_ASSOC))
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
								            /*
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
								*/
                               
                             
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
<?php include ("footer.php"); ?>