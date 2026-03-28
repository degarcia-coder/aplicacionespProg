<?php
class Acronimo {
    public static function generar ($frase){
        $frase = preg_replace("/[^a-zA-Z\s-]/", "", $frase);
        $palabras = preg_split("/[\s-]+/", $frase);
        $acronimo = '';
        foreach ($palabras as $palabra) {
            $acronimo .= strtoupper($palabra[0]);
        }
        return $acronimo;
    }
}
