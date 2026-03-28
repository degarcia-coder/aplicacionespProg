<?php
$resultado = "";
if ($_POST) {
    $A = explode(",", $_POST['A']);
    $B = explode(",", $_POST['B']);

    $obj = new Conjuntos();

    $resultado = "Union: ".implode(",", $obj->union($A,$B));
}
?>
<h2>Conjuntos</h2>
<form method="POST">
    <input type="text" name="A">
    <input type="text" name="B">
    <button>Calcular</button>
</form>

<h3><?php echo $resultado; ?></h3>