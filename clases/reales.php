<?php
class reales{
    public static function Promedio($numero) {
        return array_sum($numero) / count($numero);
    }
    public static function Mediana($numero) {
        sort($numero);
        $count = count($numero);
        $middle = floor($count / 2);
        if ($count % 2) {
            return $numero[$middle];
        } else { 
            return ($numero[$middle - 1] + $numero[$middle]) / 2;
        }
    }
    public static function Moda($numero){
        $numero = func_get_args();
        $frecuencia = array_count_values($numero);
        arsort($frecuencia);
        $moda = array_keys($frecuencia)[0];
        return $moda;
    }
}
