<?php

class Url
{
    const HOME = "index.php";
    const ADD = "form.php";
    const UPDATE = "update.php";
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

    public static function urlDelete($id) {
        return self::HOME . "?delete=$id";
    }
}
