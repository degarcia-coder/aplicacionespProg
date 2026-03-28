<?php
$resultado = "";

if ($_POST) {
    $obj = new binario();
    $resultado = $obj->convertir($_POST['numero']);
}
?>
<h2>Binario</h2>
<form method="POST">
    <input type="number" name="numero">
    <button>Convertir</button>
</form>
<h3><?php echo $resultado; ?></h3>