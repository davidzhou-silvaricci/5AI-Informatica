<?php

class ListaArticoli
{

  const BLOG = "index.php";
  const FORM = "form.php";
  const RESTART = self::BLOG . "?restart=";

  public static function urlBlog()
  {
    return self::BLOG;
  }

  public static function urlForm()
  {
    return self::FORM;
  }

  public static function urlRestart()
  {
    return self::RESTART;
  }

  public static function urlView($id)
  {
    return "view.php?id=$id";
  }

  public static function urlEdit($id)
  {
    return "edit.php?id=$id";
  }

  public static function urlDelete($id)
  {
    return self::BLOG . "?delete=$id";
  }

  public function getLista()
  {
    $connection = new Connection();
    $sql = "SELECT * FROM articoli ORDER BY id ASC";
    $result = $connection->query($sql);

    return $result;
  }

  /*public function save($value)
  {
    $_SESSION['listaArticoli'][$value->getID()] = serialize($value);
  }*/

  public function remove($id)
  {
    $sql = "DELETE FROM articoli WHERE id = ?";
    $this->connect($sql, "i", [$id]);
  }

  public function restart()
  {
    $connection = new Connection();
    $connection->query("TRUNCATE TABLE articoli");
    $connection->close();
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
