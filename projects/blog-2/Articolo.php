<?php

class Articolo {

    private $title;
    private $autore;
    private $text;
    private $id;
    private $image;

    const UPLOAD = "uploads/";
    const VIEW = 'dettagli.php';
    const HOME = "index.php";
    const ADD = 'form.php';
    const UPDATE = 'update.php';
    const DELETE = 'delete.php';
    const RESTART = self::HOME . '?svuota=1';

    public static function urlAdd() {
        return self::ADD;
    }

    public static function urlHome() {
        return self::HOME;
    }

    public static function urlSvuota() {
        return self::RESTART;
    }

    public function urlView($id) {
        return self::VIEW . "?id=$id";
    }
    public function urlDelete($id) {
        return self::HOME . "?delete=$id";
    }

    public function urlUpdate() {
        return self::UPDATE . "?id=$this->id";
    }

    public static function restart() {

        $connection = new Connection();
        $connection->query("TRUNCATE TABLE articoli");
        $connection->close();
    }

    public function store($articolo) {
        $connection = new Connection();
        // attenzione questo codice è rischioso per la sicurezza
        $sql = "INSERT INTO articoli( title, author, text ) VALUES ('" . $articolo['titolo'] . "', '" . $articolo['autore'] . "', '" . $articolo['testo'] . "')";
        $connection->query($sql);
        $connection->close();
    }

    public function load($id) {
        $connection = new Connection();
        // attenzione questo codice è rischioso per la sicurezza
        $result = $connection->query("SELECT * FROM articoli WHERE id='$id'");
        $connection->close();
        return $result;
    }

    public function delete($id) {
        $connection = new Connection();
        // attenzione questo codice è rischioso per la sicurezza
        $result = $connection->query("DELETE FROM articoli WHERE id='$id'");
        $connection->close();
        return $result;
    }

    public static function lista() {
        $connection = new Connection();
        $result = $connection->query("SELECT * FROM articoli");
        $connection->close();
        return $result;
    }

    public function view($id) {
        $result = $this->load($id);
        return $result->fetch_object();
    }
}
