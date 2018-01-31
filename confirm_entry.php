<!DOCTYPE html>
<html>
  <head>
    <link type='text/css' rel-'stylesheet' href='style.temeplate.css'/>
    <title></title>
  </head>
  <body>
    <h1>Confirm your fuel mileage entry</h1>
    <div>
    <?php
      include 'sqlite_crud.php';
      foreach ($_POST as $key => $value)
        echo $key . " => " . $value . "<br>";
      #keys: cost, gallons, pricepergallon, date, miles, miles_driven
      $entry_data = array("cost"=>$_POST["cost"],
                          "gallons"=>$_POST["gallons"],
                          "pricepergallon"=>$_POST["pricepergallon"],
                          "date"=>$_POST["date"], "miles"=>$_POST["miles"],
                          "miles_driven"=>$_POST["miles_driven"]);
      $entry = new SqliteCrud('fuel.sqlite');
      $columns = array('cost', 'gallons', 'pricepergallon', 'date', 'miles',
        'miles_driven');
      $entry->create_table('entry', $columns);
    ?>
    </div>
    <div>
      <a href="http://harleyinbody.net/fuel_mileage/index.php">Home</a>
    </div>
  </body>
</html>
