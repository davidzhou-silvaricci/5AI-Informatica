<?php

class Intervento {
    private $id;
    private $tecnico;
    private $durata;
    private $parcella;
    private $scontato;
    private $nota;

    public function add($intervento) {
        $sql = "INSERT INTO interventi(tecnico, durata, parcella, nota) VALUES (?, ?, ?, ?)";
        $this->connect($sql, "siis", [$intervento["tecnico"], $intervento["durata"], $intervento["parcella"], $intervento["nota"]]);
    }

    public function load($id) {
        $sql = "SELECT * FROM interventi WHERE id=?";
        $result = $this->connect($sql, "i", [$id]);
        return $result->fetch_object();
    }

    public function applyDiscount($id) {
        $sql = "SELECT parcella FROM interventi WHERE id=?";
        $result = $this->connect($sql, "i", [$id])->fetch_object()->parcella;
        // Applico lo sconto
        $result -= $result * 0.3;

        $connection = new Connection();
        $sql = "UPDATE interventi SET scontato = $result WHERE id=$id";
        $connection->query($sql);
    }

    public function delete($id) {
        $sql = "DELETE FROM interventi WHERE id=?";
        $this->connect($sql, "i", [$id]);
    }

    public function getByTecnico($tecnico) {
        $sql = "SELECT * FROM interventi WHERE tecnico=?";
        $result = $this->connect($sql, "s", [$tecnico]);
        return $result;
    }

    public function getByParcella() {
        $connection = new Connection();
        $sql = "SELECT * FROM interventi WHERE parcella>1000";
        $result = $connection->query($sql);
        return $result;
    }

    public function getNonScontati() {
        $connection = new Connection();
        $sql = "SELECT * FROM interventi WHERE scontato=0";
        $result = $connection->query($sql);
        return $result;
    }

    public static function getInterventi() {
        $connection = new Connection();
        $sql = "SELECT * FROM interventi ORDER BY id DESC";
        $result = $connection->query($sql);

        return $result;
    }

    private function connect($query, $types, $params) {
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
