<!DOCTYPE html>
<html>
  <head>
    <link type='text/css' rel-'stylesheet' href='style.temeplate.css'/>
    <title></title>
  </head>
  <body>
    <h1>Track your fuel mileage</h1>
    <form action="/fuel_mileage/confirm_entry.php" method="post">
      <div>
        <label for="cost">Total Cost:</label>
        <input id="cost" name="cost" alt="Total Cost" type="text">
      </div>
      <div>
        <label for="gallons">Gallons:</label>
        <input id="gallons" name="gallons" alt="Gallons" type="text">
      </div>
      <div>
        <label for="pricepergallon">Price per gallon:</label>
        <input id="pricepergallon" name="pricepergallon" alt="Price per gallon" type="text">
      </div>
      <div>
        <label for="date">Date:</label>
        <input id="date" name="date" alt="Date" type="text"> 
      </div>
      <div>
        <label for="miles">Total miles:</label>
        <input id="miles" name="miles" alt="Total miles" type="text">
      </div>
      <div>
        <label for="miles_driven">Mileage difference:</label>
        <input id="miles_driven" name="miles_driven" alt="Mileage difference" type="text">
      </div>
      <div class="button">
        <button type="submit">Submit data</button>
      </div>
    </form>
    <div>
<?php
?>
    </div>
  </body>
</html>
