<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body style="background-color: #00002a; color: white; font-family: georgia;">
    <?php 
      $name = "Ismail";
      function myfunc() {
        global $name;
        echo $name;
      }
      myfunc();
    ?>
</body>
</html>