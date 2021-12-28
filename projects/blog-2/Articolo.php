<?php

class Articolo
{

  // Attributi
  private $id;
  private $titolo;
  private $testo;

  // ID dell'articolo
  public function getId()
  {
    return $this->id;
  }

  // Titolo dell'articolo
  public function getTitolo()
  {
    return $this->titolo;
  }

  // Testo dell'articolo abbreviato
  public static function getTestoCorto($str)
  {
    if (strlen($str) > 250) {
      $str = explode("\n", wordwrap($str, 250));
      $str = $str[0] . '...';
    }
    return $str;
  }

  // Testo dell'articolo
  public function getTesto()
  {
    return $this->testo;
  }

  // Per creare un articolo
  public function create($articolo)
  {
    $sql = "INSERT INTO articoli (title, text) VALUES (?, ?)";
    $this->connect($sql, "ss", [$articolo["titolo"], $articolo["testo"]]);
  }

  public function update($articolo)
  {
    $sql = "UPDATE articoli SET title = ?, text = ? WHERE id = ?";
    $this->connect($sql, "ssi", [$articolo["titolo"], $articolo["testo"], $articolo["id"]]);
  }

  public function load($id)
  {
    $sql = "SELECT * FROM articoli WHERE id = ?";
    $result = $this->connect($sql, "i", [$id])->fetch_object();

    if (!is_null($result)) {
      $this->id = $result->id;
      $this->titolo = $result->title;
      $this->testo = $result->text;

      return true;
    } else return false;
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
