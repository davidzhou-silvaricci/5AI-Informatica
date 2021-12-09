<?php

class Software
{
    private $tipo;
    private $produttore;
    private $configurazione;

    const TIPI = ["Sistema operativo", "Grafica", "Giochi"];
    const PRODUTTORI = ["Microsoft", "Apple", "Google"];
    const PROFESSIONI = ["Informatico", "Studente", "Altro"];

    public function add($software) {

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

?>