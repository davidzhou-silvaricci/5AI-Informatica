<?php

class Visita
{
  private $id;
  private $date;
  private $browser;
  private $ip;

  public function __construct()
  {
    date_default_timezone_set("Europe/Rome");

    $this->id = uniqid();
    // Si consiglia di memorizzare time(), ovvero il timestamp, in fase di visualizzazione poi ci sarà più semplice cambiare il modo in cui presentiamo il valore.
    $this->date = date("d/m/Y H:i:s");
    $this->browser = self::findBrowser();
    $this->ip = self::findIP();

    $this->add();
  }

  private function findBrowser()
  {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $browser = "N/A";

    $browsers = array (
      '/msie/i' => 'Internet explorer',
      '/firefox/i' => 'Firefox',
      '/safari/i' => 'Safari',
      '/chrome/i' => 'Chrome',
      '/edge/i' => 'Edge',
      '/opera/i' => 'Opera',
      '/mobile/i' => 'Mobile browser'
    );

    foreach ($browsers as $regex => $value) {
      if (preg_match($regex, $user_agent)) { $browser = $value; }
    }

    return $browser;
  }

  private function findIP()
  {
    // Alternativamente si poteva usare semplicemente $_SERVER['REMOTE_ADDR'],
    // ma non sempre restituisce l'ip corretto, dovuto all'uso di proxy.

    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
      // IP from share internet
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      // IP pass from proxy
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
      $ip = $_SERVER['REMOTE_ADDR'];
    }

    return $ip;
  }

  public function getID() {
    return $this->id;
  }

  public function getDate()
  {
    return $this->date;
  }

  public function getBrowser()
  {
    return $this->browser;
  }

  public function getIP()
  {
    return $this->ip;
  }

  public function add()
  {
    $_SESSION["visite"][$this->id] = serialize($this);
  }
  
  public function urlDelete() {
    return $_SERVER["PHP_SELF"]."?delete=$this->id";
  }

  public function delete($id)
  {
    unset($_SESSION["visite"][$id]);
    
    if($_SESSION["conto"]>0) $_SESSION["conto"] -= 1;
  }
  
  public function print_div()
  {
?>
    <div class="flex flex-col md:flex-row gap-4 md:gap-8 border border-gray-300 mt-4 py-4 px-6 rounded-xl text-gray-500 transition-colors hover:border-gray-400">
      <div class="flex flex-grow flex-col gap-2 md:gap-4 text-center sm:text-left sm:flex-row justify-between">
        <span class="md:flex-grow"><?=$this->getDate()?></span>
        <span class="md:flex-grow"><?=$this->getBrowser()?></span>
        <span class="md:flex-1"><?=$this->getIP()?></span>
      </div>
      <button onclick="location.href='<?= self::urlDelete() ?>';" class="flex-none font-medium text-red-400 transition-colors hover:text-red-500 border border-red-300 hover:bg-red-50 px-8 py-4 rounded-xl md:border-0 md:bg-transparent md:hover:bg-transparent md:px-0 md:py-0">Elimina</button>
    </div>
<?php
  }

  public function print_placeholder()
  {
?>
    <div class="mt-4 p-8 rounded-xl bg-gray-100 text-gray-400 uppercase text-center font-medium">
      Nessuna visita trovata
    </div>
<?php
  }

  public function reset()
  {
    session_unset();
    return "<div class=\"flex justify-between items-center absolute inset-x-0 bottom-16 border border-yellow-300 rounded-xl mx-8 px-8 py-6 text-yellow-700 transition-colors bg-yellow-50 font-medium\"><span>Il contatore è stato resettato.</span><button onclick=\"location.href='" . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) . "';\" class=\"items-center w-12 h-10 bg-yellow-200 transition-colors hover:bg-yellow-300 rounded-lg text-black hover:underline\"><i class=\"fas fa-times\"></i></button></div>";
  }
}

?>