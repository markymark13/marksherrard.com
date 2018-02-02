<?php
include ("connect.php");
include ("header.php");
?>

<div class="container">
        <div class="content-container clearfix">
 			<div class="row">
            <div class="col-lg-12">
				<form class="form-horizontal" method="post" action="input.php">
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
				    
				    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places&amp;extensions=review_summary?key=AIzaSyAyEwCPeqnt5XTgFRUOXF1VKabD5ho9Swo" type="text/javascript"></script>

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
					          
					             
					          
      						document.getElementById('gNeighborhood').value = place.address_components[2].long_name;
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
								<input type="hidden" id="name" name="name" />
								<input  type="hidden" id="cityLat" name="cityLat" />
								<input  type="hidden" id="cityLng" name="cityLng" />  
								<input  type="hidden" id="googlePlaceID" name="googlePlaceID" />  
								<input  type="hidden" id="gPrice" name="gPrice" /> 
								<input  type="hidden" id="gRating" name="gRating" /> 
								<input  type="hidden" id="gReview" name="gReview" /> 
							
									<input  type="hidden" id="gNeighborhood" name="gNeighborhood" /> 
				    </div>
				  </div>
			<div class="form-group text-center">
					 <button type="submit"  name="submit" class="btn btn-success btn-block visible-xs">Submit</button> 
					 <button type="submit"  name="submit" class="btn btn-success hidden-xs">Submit</button>
					 &nbsp; <a href="index.php">cancel</a>
			</div>
</form>
</div>
</div>
      
<?php include ("footer.php"); ?>


