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
      foreach ($_POST as $key => $value)
        echo nl2br($key . " =>" . $value . "\n");
    ?>
    </div>
    <div>
      <a href="http://harleyinbody.net/fuel_mileage/index.php">Home</a>
    </div>
  </body>
</html>
