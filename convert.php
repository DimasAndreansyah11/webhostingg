<?php
function convertSuhu($value, $to) {
  if ($to == 'fahrenheit') {
    return ($value * 9 / 5) + 32;
  } else {
    return ($value - 32) * 5 / 9;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $temperature = floatval($_POST["temperature"]);
  $convertTo = $_POST["convertTo"];
  $converted = convertSuhu($temperature, $convertTo);
  $unit = ($convertTo == "fahrenheit") ? "°F" : "°C";

  echo "<h1>Hasil Konversi:</h1>";
  echo "<p>Hasil: $converted $unit</p>";
  echo "<a href='index.html'>Kembali</a>";
}
?>
