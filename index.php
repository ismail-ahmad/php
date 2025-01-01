<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
      body{
        background-color: #00002a;
        color: white;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      }
    </style>
</head>
<body>
    <?php
      class person {
        public $name;
        public $age;

        public function set_name($name, $age) {
          $this->name = $name;
          $this->age = $age;
        }

        public function get_name() {
          return 'My name is '. $this->name . ' and I am ' . $this->age;
        }
      }
      $me = new person();
      $me->set_name("Ismail Ahmad", 26);
      echo "<h1>Who am I?</h1>";
      echo '<ul>'.
       '<li>' . $me->name . '</li>'.
       '<li>' . $me->age . '</li>' .
       '<li>' . $me->get_name() . '</li>' .
       '</ul>';
    ?>
</body>
</html>