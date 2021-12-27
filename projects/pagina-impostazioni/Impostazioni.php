<?php

class Impostazioni
{
  private $theme;
  private $mode;
  private $pages;
  private $deleteType;

  // Uso delle costanti per non dover ripetere manualmente i nomi delle impotazioni o della sessione, per evitare errori e per poter rinominarle velocemente
  const SETTINGS = "settings";
  const DARK = "dark";
  const LIGHT = "light";
  const HARD = "hard";
  const SOFT = "soft";

  // Creo la lista dei temi presenti nel sistema
  const THEMES = ["blue" => "Blu", "red" => "Rosso", "green" => "Verde"];

  // Creo i valori di default delle impostazioni
  const BASE = ['theme' => 'blue', 'mode' => 'light', 'pages' => 5, 'deleteType' => 'soft'];

  public function __construct()
  {
    // Se l'utente non ma hai salvato un'impostazione assegno quelle di default
    if (!isset($_SESSION[self::SETTINGS])) {
      $this->theme = self::BASE["theme"];
      $this->mode = self::BASE["mode"];
      $this->pages = self::BASE["pages"];
      $this->deleteType = self::BASE["deleteType"];
      // E le salvo 
      $this->store();
    } else $this->load();
  }

  // Potrei usare i metodi magici di php __get in modo da poter poi usare direttamente $obj->theme etc.
  public function getTheme()
  {
    return $this->theme;
  }
  public function getMode()
  {
    return $this->mode;
  }
  public function getPages()
  {
    return $this->pages;
  }
  public function getDeleteType()
  {
    return $this->deleteType;
  }

  public function setTheme($theme)
  {
    $this->theme = $theme;
  }

  // Per il tema aggiungo un metodo get per avere il nome leggibile del tema
  public function getThemeName()
  {
    return self::THEMES[$this->theme];
  }

  // Ricevo $settings ovvero l'array $_POST e le assegno al mio oggetto
  public function update($settings)
  {
    $this->theme = $settings["theme"];
    $this->mode = $settings["mode"];
    $this->pages = $settings["pages"];
    $this->deleteType = $settings["deleteType"];
    return "Impostazioni aggiornate.";
  }

  // Prelevo le impostazioni salvate nella sessione e le assegno all'oggetto
  public function load()
  {
    $tmp = unserialize($_SESSION[self::SETTINGS]);
    $this->theme = $tmp->theme;
    $this->mode = $tmp->mode;
    $this->pages = $tmp->pages;
    $this->deleteType = $tmp->deleteType;
  }

  // Salvo le informazioni nella sessione
  public function store()
  {
    $_SESSION[self::SETTINGS] = serialize($this);
    return "Impostazioni salvate.";
  }

  // Cancello la sessione
  public static function reset()
  {
    // Cancello tutti i dati della sessione, non solo le impostazioni.
    session_unset();

    return "Impostazioni reimpostate.";
  }
}
