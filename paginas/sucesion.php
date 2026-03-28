<?php
$resultado = "";
if ($_POST) {
    $n = $_POST['numero'];
    $tipo = $_POST['tipo'];

    $obj = new Sucesion();

    if ($tipo == "fibo") {
        $resultado = implode(", ", $obj->fibonacci($n));
    } else {
        $resultado = $obj->factorial($n);
    }
}
?>
<h2>Fibonacci / Factorial</h2>
<form method="POST">
    <input type="number" name="numero">
    <select name="tipo">
        <option value="fibo">Fibonaccci</option>
        <option value="fact">Factorial</option>
    </select>
    <button>Calcular</button>
</form>
<h3><?php echo $resultado; ?></h3>