<?php

class Url
{
    const HOME = "index.php";
    const ADD = "form.php";
    const VIEW = "view.php";
    const UPDATE = "update.php";

    public static function toHome()
    {
        return self::HOME;
    }

    public static function toForm()
    {
        return self::ADD;
    }

    public static function urlView($id) {
        return self::VIEW . "?id=$id";
    }

    public static function urlEditEnte($id, $ente) {
        return self::VIEW . "?id=$id&ente=$ente";
    }

    public static function urlFilterEnte($ente) {
        return self::HOME . "?filter=$ente&by=ente";
    }

    public static function urlFilterImporto($importo) {
        return self::HOME . "?filter=$importo&by=importo";
    }

    public static function urlDelete($id) {
        return self::HOME . "?delete=$id";
    }
}
