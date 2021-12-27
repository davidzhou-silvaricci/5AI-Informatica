<?php

class Url
{
    const HOME = "index.php";
    const ADD = "form.php";
    const VIEW = "dettagli.php";
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

    public static function urlView($id)
    {
        return self::VIEW . "?id=$id";
    }

    public static function urlSconta($id)
    {
        return self::HOME . "?sconta=$id";
    }

    public static function urlDelete($id)
    {
        return self::HOME . "?delete=$id";
    }

    public static function urlTecnico($tecnico)
    {
        return self::HOME . "?tecnico=$tecnico";
    }

    public static function urlImporto()
    {
        return self::HOME . "?importo=";
    }

    public static function urlSenzaSconto()
    {
        return self::HOME . "?nosconto=";
    }
}
