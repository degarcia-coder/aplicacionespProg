<?php
$resultado = "";
if ($_POST) {
    $obj = new Acronimo();
    $resultado = $obj->generar($_POST['frase']);
}
?>
<h2>Acrónimo</h2>
<form method="POST">
    <input type="text" name="frase">
    <button>Generar</button>
</form>
<h3> <?php echo $resultado; ?> </h3>
