php
<?php
// Función para calcular la hipotenusa a partir de los valores de los catetos
function calcular_hipotenusa($cateto1, $cateto2) {
  // Calculamos la hipotenusa utilizando la fórmula
  $hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2));
  return $hipotenusa;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtenemos los valores de los catetos
  $cateto1 = $_POST["cateto1"];
  $cateto2 = $_POST["cateto2"];

  // Calculamos la hipotenusa
  $hipotenusa = calcular_hipotenusa($cateto1, $cateto2);
}
?>

<!-- Formulario HTML para introducir los valores de los catetos -->
<form method="post">
  <label for="cateto1">Cateto 1:</label>
  <input type="number" id="cateto1" name="cateto1" required>
  <br>
  <label for="cateto2">Cateto 2:</label>
  <input type="number" id="cateto2" name="cateto2" required>
  <br>
  <button type="submit">Calcular hipotenusa</button>
</form>

<?php
// Mostramos el resultado de la hipotenusa si se ha calculado
if (isset($hipotenusa)) {
  echo "<p>La hipotenusa es: " . $hipotenusa . "</p>";
}
?>