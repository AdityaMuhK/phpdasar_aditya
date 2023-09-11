<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name : <input type="text" name="fname">
  <br/>
  <br/>
  Umur : <input type="text" name="umur">
  <br/>
  <br/>   
  Gender : <label for="lakiLaki"><input type="checkbox" id="lakiLaki" name="gender[]" value="Laki-laki"> Laki-laki</label>
           <label for="peremPuan"> <input type="checkbox" id="peremPuan" name="gender[]" value="Perempuan"> Perempuan</label>
  <br/>
  <br/>
  Makanan Kesukaan : <label for="rendang"><input type="checkbox" id="rendang" name="makanan[]" value="Rendang">Rendang</label>
  <label for="sayurSop"><input type="checkbox" id="sayurSop" name="makanan[]" value="Sayur sop">Sayur Sop</label>
  <label for="ayam"><input type="checkbox" id="ayam" name="makanan[]" value="Ayam">Ayam</label>
  <br/>
  <br/>
  <input type="submit">
</form>
<br>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo "Nama Saya adalah $name";
  }
}
?>
<br/>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $umur = $_POST['umur'];
  if (empty($umur)) {
    echo "Umur is empty";
  } else {
    echo "Umur Saya $umur Tahun";
  }
}
?>
<br/>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["gender"])) {
        $selectedInterests = $_POST["gender"];
        foreach ($selectedInterests as $gender) {
            echo "Saya Seorang " . $gender . "<br>";
        }
    } else {
        echo "No Gender selected.";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["makanan"])) {
        $selectedInterests = $_POST["makanan"];
        foreach ($selectedInterests as $makanan) {
            echo "Dan makanan kesukaan saya adalah " . $makanan . "<br>";
        }
    } else {
        echo "No Gender selected.";
    }
}
?>
</body>
</html>