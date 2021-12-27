<?php


class Logger
{
  private $nomePagina;
  private $data;

  public function aggiungi($nome) {
    $this->nomePagina = $nome;
    $this->data = time();

    $this->salva();
  }

  public function salva() {
    $_SESSION["logger"][$this->data] = serialize($this);
  }

  public function svuota() {
    unset($_SESSION["logger"]);
  }

  public function elimina($id) {
    if(isset($_SESSION["logger"][$id]))
      unset($_SESSION["logger"][$id]);
  }

  public function stampa()
  {
?>

    <div class="log">
        <div class="callout">
          <p><?= $this->nomePagina ?></p>
          <p><?= date('m/d/Y H:i:s', $this->data); ?></p>
          <br/>
          <a href=<?="index.php?delete=".$this->data?>>Elimina</a>
        </div>
    </div>

<?php
  }
}
