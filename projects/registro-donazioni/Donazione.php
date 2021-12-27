<?php

class Donazione
{
    private $importo;
    private $ente;
    private $anno;
    private $nota;

    const ENTI = ["caritas" => "Caritas", "unicef" => "UNICEF", "emergency" => "Emergency"];

    public function add($donazione)
    {
        $sql = "INSERT INTO donazioni (importo, ente, anno, nota) VALUES (?, ?, ?, ?)";
        $this->connect($sql, "dsis", [$donazione["importo"], $donazione["ente"], $donazione["anno"], $donazione["nota"]]);
    }

    public function load($id)
    {
        $sql = "SELECT * FROM donazioni WHERE id = ?";
        $result = $this->connect($sql, "i", [$id]);
        return $result->fetch_object();
    }

    public function update($donazione)
    {
        $sql = "UPDATE donazioni SET ente = ? WHERE id = ?";
        $this->connect($sql, "si", [$donazione["ente"], $donazione["id"]]);
    }

    public static function getEnte($ente)
    {
        return self::ENTI[$ente];
    }

    public function getFilteredList($filter, $by)
    {
        if ($by === "ente") {
            $sql = "SELECT * FROM donazioni WHERE ente = ?";
            $result = $this->connect($sql, "s", [$filter]);
        } else if ($by === "importo") {
            $sql = "SELECT * FROM donazioni WHERE importo > ?";
            $result = $this->connect($sql, "i", [$filter]);
        }
        return ($result === false ? $this->getDonazioni() : $result);
    }

    public static function getDonazioni()
    {
        $connection = new Connection();
        $sql = "SELECT * FROM donazioni ORDER BY id ASC";
        $result = $connection->query($sql);

        return $result;
    }

    private function connect($query, $types, $params)
    {
        $connection = new Connection();
        $stmt = $connection->prepare($query);
        $stmt->bind_param($types, ...$params);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        $connection->close();

        return $result;
    }
}
