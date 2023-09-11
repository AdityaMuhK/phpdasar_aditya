<!DOCTYPE html>
<html>
<body>
    <!-- //PHP VARIABLE -->
    <?php echo "Hello World"; ?>
    <br/>
    <?php $tes = "testing";
    echo $tes ?>
    <!-- PHP OPERATOR -->
    <!-- LOOP -->
    <br/>
    <br/>
    <!-- if else -->
    <?php
    $t = date("H");

    if ($t > 13) {
      echo "lebih dari 13";
    } else {
      echo "kurang dari 13";
    }
    ?>
    <br/>
    <br/>
    <!-- switch -->
    <?php
    $favcolor = "red";

    switch ($favcolor) {
      case "red":
        echo "Your favorite color is red!";
        break;
      case "blue":
        echo "Your favorite color is blue!";
        break;
      case "green":
        echo "Your favorite color is green!";
        break;
      default:
        echo "Your favorite color is neither red, blue, nor green!";
    }
    ?>
    <br>
    <br/>
    <!--foreach-->
    <?php  
    $cars = array("BMW", "Toyota", "Lamborgini", "Ferrari"); 

    foreach ($cars as $value) {
      echo "$value <br>";
    }
    ?>  
    <br>
    <br/>
    <!-- FUNCTION -->
    <?php 
    function nama($nama, $ultah) {
        echo "nama saya adalah = $nama. saya ulang tahun = $ultah";
      }
      nama("Aditya", "19-12-2006");
    ?>

    <br/>
    <br/>
    <!-- ARRAY  -->
    <?php
    $cars = array("Volvo", "BMW", "Toyota"); 
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>

    <!-- date and time -->
    <?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");
    ?>
    <br>
    <br>
    <!-- PHP OOP -->
    <?php
    class Fruit {
      // Properties
      public $name;
      public $color;

      // Methods
      function set_name($name) {
        $this->name = $name;
      }
      function get_name() {
        return $this->name;
      }
    }

    $apple = new Fruit();
    $banana = new Fruit();
    $apple->set_name('Apple');
    $banana->set_name('Banana');

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
    ?>
    <br>
    <br>
    <!-- cunstructor -->
    <?php 
    class komputer
    {
      public $prosesor;
      public $memori;
      public $ram;
      public function __cunstruct($prosesor = "prosesor", $memori = "memori", $ram = "ram")
      {
        $this->prosesor = $prosesor;
        $this->memori = $memori;
        $this->ram = $ram;
      }
      public function getData()
      {
        return "$this->prosesor | $this->memori | $this->ram";
      }
      
    }
    $komputer1 = new komputer ('Core 17', '225 GB', '8 GB');
    $komputer2 = new komputer('Core 19', '500 GB');
    echo 'Spek Komputer Sekolah : ' . $komputer1->getData();
    echo '<br />';
    echo '<br />';
    echo 'Spek Komputer Rumah : ' . $komputer2->getData();
    ?>
    <br/>
    <br/>
    <!-- DESTRUCTOR -->
    <?php 
    class product
    {
      public $ram;
      public function __cunstruct($ram = "ram") 
      {
        $this->ram = $ram;
      }
      function __destruct()
      {
        echo "Ram komputer {$this->ram}";
      }
    }

    $komputer1 = new product('225 GB');
    ?>
    <br/>
    <br/>
    <!-- SESSION -->
    <?php 
        session_start();
        echo 'id user saya adalah ' . $_SESSION['logged_in_user_id'];
        echo '<br />';
        echo 'Username saya adalah ' . $_SESSION['logged_in_user_name'];
    ?>
</body>
</html>