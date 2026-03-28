<?php
$resultado = "";

if ($_POST) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $op = $_POST['op'];

    $obj = new Calculadora();
    $resultado = $obj->operar($a,$b,$op);

    file_put_contents("data/historial.txt", "$a $op $b = $resultado\n", FILE_APPEND);
}
$historial = file_get_contents("data/historial.txt");
?>
<h2>Calculadora</h2>
<form method="POST">
    <input type="number" name="a">
    <input type="number" name="b">
    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <button>Calcular</button>
</form>
<h3><?php echo $resultado; ?></h3>
<pre><?php echo $historial; ?></pre>