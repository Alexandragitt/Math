<?php
/**
 * Created by PhpStorm.
 * User: Alexandra
 * Date: 11.08.2018
 * Time: 15:04
 */

class Math
{
    public static function devision($first, $second){
        try {
            return $first/$second;
        }  catch (Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n";

        }
    public static function multiply($first, $second){
        return $first+$second;
    }

   }

   // тебе надо только devision? а Multiply не надо?

}
