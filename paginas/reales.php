<?php
$resultado = "";

if ($_POST) {
    $numero = explode(",", $_POST['numeros']);
    $numero = array_map('floatval', $numero);

    $obj = new reales();

    $resultado = "Prom: ".$obj->promedio($numero) .
    " Media: ".$obj->media($numero).
                " Moda: ".$obj->moda($numero);
}
?>
<h2>Estadística</h2>

<form method="POST">
    <input type="text" name="numeros">
    <button>Calcular</button>
</form>

<h3><?php echo $resultado; ?></h3>