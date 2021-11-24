<?php

class Articolo
{
    private $id;
    private $nome;
    private $quantita;
    private $prezzo;

    public function add($articolo)
    {
        /*
        $connection = new Connection();
        $sql = "INSERT INTO articoli( nome, quantita, prezzo ) VALUES (?, ? ,?)";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("sid", $articolo["nome"], $articolo["quantita"], $articolo["prezzo"]);
        $stmt->execute();
        $connection->close();
        */
        $sql = "INSERT INTO articoli( nome, quantita, prezzo ) VALUES (?, ? ,?)";
        $this->connect($sql, "sid", [$articolo["nome"], $articolo["quantita"], $articolo["prezzo"]], false);
    }

    public function load($id)
    {
        /*
        $connection = new Connection();
        $sql = "SELECT * FROM articoli WHERE id=?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $connection->close();

        return $stmt->get_result()->fetch_object();
        */
        $sql = "SELECT * FROM articoli WHERE id=?";
        $this->connect($sql, "i", [$id], true);
    }

    public function delete($id)
    {
        /*
        $connection = new Connection();
        $sql = "DELETE FROM articoli WHERE id=?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $connection->close();

        return $stmt->get_result()->fetch_object();
        */
        $sql = "DELETE FROM articoli WHERE id=?";
        $this->connect($sql, "i", [$id], true);
    }

    public static function reset()
    {
        $connection = new Connection();
        $connection->query("TRUNCATE TABLE articoli");
        $connection->close();
    }

    public static function getArticoli()
    {
        $connection = new Connection();
        $sql = "SELECT * FROM articoli";
        $result = $connection->query($sql);
        $connection->close();

        return $result;
    }

    private function connect($query, $types, $params, $return)
    {
        $connection = new Connection();
        $stmt = $connection->prepare($query);
        $stmt->bind_param($types, ...$params);
        $stmt->execute();
        $connection->close();

        if($return === true)
            return $stmt->get_result();
    }
}
