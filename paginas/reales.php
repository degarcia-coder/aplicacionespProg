<?php
$resultado = "";

if ($_POST) {
    $nums = explode(",", $_POST['numeros']);
    $nums = array_map('floatval', $nums);

    $obj = new Reales();

    $resultado = "Prom: ".$obj->promedio($nums) .
                 " Media: ".$obj->media($nums).
                 " Moda: ".$obj->moda($nums);
}
?>
<h2>Estadística</h2>

<form method="POST">
    <input type="text" name="numeros">
    <button>Calcular</button>
</form>

<h3><?php echo $resultado; ?></h3>