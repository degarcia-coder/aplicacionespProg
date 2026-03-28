<?php
class conjuntos {
    public static function union($conjuntoA, $conjuntoB) {
        return array_unique(array_merge($conjuntoA, $conjuntoB));
    }
    public static function interseccion($conjuntoA, $conjuntoB) {
        return array_values(array_intersect($conjuntoA, $conjuntoB));
    }
    public static function diferencia($conjuntoA, $conjuntoB) {
        return array_values(array_diff($conjuntoA, $conjuntoB));
    }
}
