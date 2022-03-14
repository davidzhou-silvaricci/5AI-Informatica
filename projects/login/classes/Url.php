<?php

class Url
{
    const HOME = "index.php";
    const SIGNUP = "registrazione.php";
    const LOGIN = "login.php";

    public static function toHome()
    {
        return self::HOME;
    }

    public static function toRegistrazione()
    {
        return self::SIGNUP;
    }

    public static function toLogin()
    {
        return self::LOGIN;
    }
}
