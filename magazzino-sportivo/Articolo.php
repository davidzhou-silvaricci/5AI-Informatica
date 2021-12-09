<?php

class Articolo
{
    private $id;
    private $nome;
    private $quantita;
    private $prezzo;

    public function add($articolo)
    {
        $sql = "INSERT INTO articoli(nome, quantita, prezzo) VALUES (?, ? ,?)";
        $this->connect($sql, "sid", [$articolo["nome"], $articolo["quantita"], $articolo["prezzo"]]);
    }

    public function sell($id)
    {
        $articolo = $this->load($id);
        $quantita = $articolo->quantita;

        if ($quantita > 0) $quantita--;
        $this->update($quantita, $id);
    }

    public function update($quantita, $id)
    {
        $sql = "UPDATE articoli SET quantita=? WHERE id=?";
        $this->connect($sql, "ii", [$quantita, $id]);
    }

    public function load($id)
    {
        $sql = "SELECT * FROM articoli WHERE id=?";
        return $this->connect($sql, "i", [$id])->fetch_object();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM articoli WHERE id=?";
        return $this->connect($sql, "i", [$id]);
    }

    public static function reset()
    {
        $connection = new Connection();
        $connection->query("TRUNCATE TABLE articoli");
        $connection->close();
    }

    public static function getDaRifornire()
    {
        $connection = new Connection();
        $sql = "SELECT * FROM articoli WHERE quantita <= 3 ORDER BY quantita ASC";
        $result = $connection->query($sql);
        $connection->close();

        return $result;
    }

    public static function getArticoli()
    {
        $connection = new Connection();
        $sql = "SELECT * FROM articoli ORDER BY id DESC";
        $result = $connection->query($sql);
        $connection->close();

        return $result;
    }

    private function connect($query, $types, $params)
    {
        $connection = new Connection();
        $stmt = $connection->prepare($query);
        $stmt->bind_param($types, ...$params);
        $stmt->execute();
        $result = $stmt->get_result();
        // Chiudo il prepare e la connessione
        $stmt->close();
        $connection->close();

        return $result;
    }
}
