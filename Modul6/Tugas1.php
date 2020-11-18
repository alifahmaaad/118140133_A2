<html>
<?php

function faktorial($bil)
{
  $i = 1;
  $hasil = 1;
  for ($i = 1; $i <= $bil; $i++) {
    $hasil = $hasil * $i;
  }
  echo "hasilnya = $hasil";
}
?>

<head>
  <title>Faktorial</title>
</head>
<form method="POST">
  bilangan : <input type="text" name="bil">
  <button type="submit" name="sub"> Faktorial</button></form>

</html>
<?php if (isset($_POST['sub'])) {
  $bill = $_POST['bil'];
  faktorial($bill);
}
