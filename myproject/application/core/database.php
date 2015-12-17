<?php
class Singleton
{
    private static $instancia = null;

    private function __construct(){
        //Tareas de inicialización
    }

    public static function getInstance(){
        if(is_null(self::$instancia)){
            self::$instancia = new Singleton();
        }
        return self::$instancia;
    }
}