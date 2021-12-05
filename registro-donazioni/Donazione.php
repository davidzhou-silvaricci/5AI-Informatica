<?php

class Donazione
{
    private $importo;
    private $ente;
    private $anno;
    private $nota;

    public function add($donazione)
    {
        $sql = "INSERT INTO donazioni (importo, ente, anno, nota) VALUES (?, ?, ?, ?)";
        $this->connect($sql, "dsis", [$donazione["importo"], $donazione["ente"], $donazione["anno"], $donazione["nota"]]);
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
