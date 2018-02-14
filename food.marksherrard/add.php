<?php
include ("connect.php");
include ("header.php");
?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <form role="form" class="form-horizontal" method="post" action="input.php">
        <fieldset>
          <div class="form-group">
            <label class="col-sm-3 control-label">Cuisine</label>
            <div class="col-sm-5">
              <select class="form-control" name="food">
                <?php

                  $Cuisine = array("American", "BBQ", "Brewery", "Chinese", "Mexican", "Peruvian", "Hungarian", "Indian", "Spanish", "Pizza", "Italian","Japanese/Sushi", "Thai", "French ", "Mediterranean", "Lebanese", "German", "Korean", "Soul");
                  sort($Cuisine);
                  foreach ($Cuisine as $key => $val) {
                      echo "<option>".$val."</option>";
                  }

                  ?>
                <option>Other</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Address</label>
            <div class="col-sm-5">
              <input id="user_input_autocomplete_address" name="user_input_autocomplete_address"
              class="form-control" placeholder="Start typing your address...">
            </div>
            
          </fieldset>
          <fieldset class="disabled">
            <div class="form-group">
              <input id="name" name="name" type="hidden">
              <input id="formatted_address" name="formatted_address" type="hidden">
              <input id="street_number" name="street_number" type="hidden">
              <input id="route" name="route" type="hidden">
              <input id="locality" name="locality" type="hidden">
              <input id="administrative_area_level_1" name="administrative_area_level_1" type="hidden">
              <input id="postal_code" name="postal_code" type="hidden">
              <input id="neighborhood" name="neighborhood" type="hidden">
              <input id="country" name="country" type="hidden">
              <input id="price_level" name="price_level" type="hidden">
              <input id="place_id" name="place_id" type="hidden">
              <input id="url" name="url" type="hidden">
              <input id="lat" name="lat" type="hidden">
              <input id="lng" name="lng" type="hidden">
              <input id="types" name="types" type="hidden">
              <input id="icon" name="icon" type="hidden">
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label class="col-sm-3 control-label">Notes</label>
               <div class="col-sm-5">
              <textarea class="form-control" rows="3" id="notes" name='notes'></textarea>
            </div>
            </div>
          </fieldset>

        </div>
        
        <div class="form-group text-center">
          <button type="submit"  name="submit" class="btn btn-success btn-block visible-xs">Submit</button>
          <button type="submit"  name="submit" class="btn btn-success hidden-xs">Submit</button>
          &nbsp; <a href="index.php">cancel</a>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Include Google Maps JS API -->
<script type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyAyEwCPeqnt5XTgFRUOXF1VKabD5ho9Swo "></script>
<!-- to test: https://maps.googleapis.com/maps/api/place/details/json?placeid=[place id]&key=[api key]
<!-- Custom JS code to bind to Autocomplete API -->
<script type="text/javascript" src="js/autocomplete.js"></script>
</body>
</html>