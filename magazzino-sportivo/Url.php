<?php

class Url
{
    const HOME = "index.php";
    const ADD = "form.php";
    const UPDATE = "update.php";
    const RIFORNIMENTO = "rifornimento.php";
    const RESET = self::HOME . "?reset=";

    public static function toHome()
    {
        return self::HOME;
    }

    public static function toForm()
    {
        return self::ADD;
    }

    public static function toRifornimento() {
        return self::RIFORNIMENTO;
    }

    public static function toReset()
    {
        return self::RESET;
    }

    public static function urlSell($id) {
        return self::HOME . "?sell=$id";
    }

    public static function urlUpdate($id, $redirect) {
        if($redirect === true) $page = self::UPDATE;
        else $page = self::RIFORNIMENTO;
        return $page . "?id=$id";
    }

    public static function urlDelete($id) {
        return self::HOME . "?delete=$id";
    }
}
