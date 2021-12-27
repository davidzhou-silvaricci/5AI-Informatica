<?php

class Articolo
{

  // Attributi
  private $id;
  private $titolo;
  private $img;
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

  // Immagine dell'articolo
  public function getImg()
  {
    if (file_exists($this->img))
      return $this->img;
    else return false;
  }

  // Testo dell'articolo abbreviato
  public function getTestoCorto()
  {
    $str = $this->testo;
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
    $this->id = uniqid();
    $this->titolo = $articolo["titolo"];
    $this->testo = $articolo["testo"];

    if (!file_exists('uploads')) mkdir('uploads', 0777);

    $dir = "uploads/";
    $nameFile = $_FILES["image"]["name"];
    $explode = (explode(".", $nameFile));
    $ext = end($explode);
    $file = $dir . $this->id . "." . $ext;
    move_uploaded_file($_FILES["image"]["tmp_name"], $file);
    $this->img = $file;

    return '<div class="flex flex-wrap sm:flex-no-wrap justify-between items-center bg-green-50 overflow-hidden p-4 space-x-0 sm:space-x-2" > <div class="flex flex-1 sm:flex-initial justify-center items-baseline py-4 sm:py-0" > <span class="bg-green-300 bg-opacity-50 rounded-full p-1"> <svg class="h-10 sm:h-6 w-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" > <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" ></path> </svg> </span> </div><div class="flex flex-col flex-grow text-center sm:text-left" > <h1 class="font-medium leading-relaxed sm:leading-normal"> L\'articolo è stato <strong class="text-green-400">pubblicato</strong>! </h1> </div></div>';
  }

  public function update($articolo)
  {
    $this->id = $articolo["id"];
    $this->titolo = $articolo["titolo"];
    $this->testo = $articolo["testo"];

    if ($_FILES["image"]["name"] == "") {
      $this->img = unserialize($_SESSION["listaArticoli"][$this->id])->getImg();
    } else {
      if (!file_exists('uploads')) mkdir('uploads', 0777);
      $dir = "uploads/";
      $nameFile = $_FILES["image"]["name"];
      $explode = (explode(".", $nameFile));
      $ext = end($explode);
      $file = $dir . $this->id . "." . $ext;
      move_uploaded_file($_FILES["image"]["tmp_name"], $file);
      $this->img = $file;
    }
  }

  public function load($id)
  {
    $tmp = unserialize($_SESSION["listaArticoli"][$id]);
    $this->id = $tmp->id;
    $this->titolo = $tmp->titolo;
    $this->testo = $tmp->testo;
    $this->img = $tmp->img;
  }
}

?>

<!--
  // Template della card dell'articolo
  public function stampa() {
    
  }
}
-->