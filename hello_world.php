<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        print_r($_SESSION);
        echo '<br>';
        $_SESSION["name"] = "Osama";
        print_r($_SESSION);
        echo "session variables removed";
        session_unset();
        session_destroy();
        print_r($_SESSION);
    ?>

</body>
</html>