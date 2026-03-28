<?php
$pagina = $_GET['pagina'] ?? 'menu';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Proyecto</title>
</head>
<body>
<h1>MENÚ</h1>
<a href="index.php">Inicio</a> |
<a href="index.php?pagina=acronimo">Acrónimo</a> |
<a href="index.php?pagina=sucesion">Fibonacci</a> |
<a href="index.php?pagina=reales">Estadística</a> |
<a href="index.php?pagina=conjuntos">Conjuntos</a> |
<a href="index.php?pagina=binario">Binario</a> |
<a href="index.php?pagina=calculadora">Calculadora</a>
<hr>
<?php
switch($pagina){
    case 'acronimo':
        require_once "clases/acronimo.php";
        include "paginas/acronimo.php";
        break;
    case 'sucesion':
        require_once "clases/sucesion.php";
        include "paginas/sucesion.php";
        break;

    case 'reales':
        require_once "clases/reales.php";
        include "paginas/reales.php";
        break;

    case 'conjuntos':
        require_once "clases/conjuntos.php";
        include "paginas/conjuntos.php";
        break;

    case 'binario':
        require_once "clases/binario.php";
        include "paginas/binario.php";
        break;

    case 'calculadora':
        require_once "clases/calculadora.php";
        include "paginas/calculadora.php";
        break;

    default:
        include "paginas/menu.php";
}

?>

</body>
</html>