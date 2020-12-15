<?php

namespace Core\Tools;

class Session {

    public static function set($data) {
        $_SESSION = $data;
    }

    public static function get(string $name)  {
        return $_SESSION[$name] ?? null;
    }

    public static function clean(string $name) {
        $_SESSION[$name] = null;
    }

    public static function checkSession(string $name){
        return(isset($_SESSION[$name]));
    }
}