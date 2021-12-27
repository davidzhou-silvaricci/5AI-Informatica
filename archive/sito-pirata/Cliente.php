<?php

class Cliente
{
    private $nome;
    private $cognome;
    private $codice_fiscate;
    private $professione;
    private $num_cellulare;

    public function add() {

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
