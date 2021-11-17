<?php

class Url
{
    const HOME = "index.php";
    const ADD = "form.php";
    const RESET = self::HOME . "?reset=";
    const ELENCO_SOFTWARE = self::HOME . "?filter=software";
    const ELENCO_CLIENTI = self::HOME . "?filter=clienti";

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
        return self::ELENCO_SOFTWARE . "&tipo=" . $tipo;
    }

    public static function viewClienti($professione) {
        return self::ELENCO_CLIENTI . "&professione=" . $professione;
    }
}

?>