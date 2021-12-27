<?php

class Url
{
    const HOME = "index.php";
    const ADD = "form.php";
    const RESET = self::HOME . "?reset=";

    public static function toHome()
    {
        return self::HOME;
    }

    public static function toForm()
    {
        return self::ADD;
    }

    public static function toReset()
    {
        return self::RESET;
    }

    public static function viewSoftware($tipo) {
        return self::HOME . "?tipo=" . $tipo;
    }

    public static function viewClienti($professione) {
        return self::HOME . "?professione=" . $professione;
    }

    public static function urlDelete($id) {
        return self::HOME . "?delete=$id";
    }
}
