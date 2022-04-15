<?php

class Url
{
    const HOME = "index.php";
    const ADD = "add.php";
    const VIEW = "view.php";
    const EDIT = "edit.php";
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

    public static function view($id)
    {
        return self::VIEW . "?id=$id";
    }

    public static function edit($id)
    {
        return self::EDIT . "?id=$id";
    }

    public static function delete($id)
    {
        return self::HOME . "?delete=$id";
    }
}
