<html>
<head>
<title>Temperature Conversion</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<body>
<h2>Temperature Conversion</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Enter temperature: <input type="text" name="temperature" value="<?php if(isset($_POST['temperature'])){ echo $_POST['temperature']; } ?>">
   <br><br>
   From:
   <input type="radio" name="from" value="celsius" <?php if(isset($_POST['from']) && $_POST['from'] == "celsius"){ echo "checked"; } ?>>Celsius
   <input type="radio" name="from" value="fahrenheit" <?php if(isset($_POST['from']) && $_POST['from'] == "fahrenheit"){ echo "checked"; } ?>>Fahrenheit
   <br><br>
   To:
   <input type="radio" name="to" value="celsius" <?php if(isset($_POST['to']) && $_POST['to'] == "celsius"){ echo "checked"; } ?>>Celsius
   <input type="radio" name="to" value="fahrenheit" <?php if(isset($_POST['to']) && $_POST['to'] == "fahrenheit"){ echo "checked"; } ?>>Fahrenheit
   <br><br>
   <input type="submit" name="submit" value="Submit">
</form>

 
<?php
if (isset($_POST["submit"])) {
   $temperature = $_POST['temperature'];
   $from = $_POST['from'];
   $to = $_POST['to'];
 if ($from == "celsius" && $to == "fahrenheit") {
      $result = ($temperature * 9 / 5) + 32;
      echo $temperature . "°C is equal to " . $result . "°F";
   }
   elseif ($from == "fahrenheit" && $to == "celsius") {
      $result = ($temperature - 32) * 5 / 9;
      echo $temperature . "°F is equal to " . $result . "°C";
   }
   else {
      echo "Invalid Conversion";
   }
}
?>
</body>
</html>
