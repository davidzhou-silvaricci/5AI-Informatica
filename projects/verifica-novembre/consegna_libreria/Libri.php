<?php

class Libri
{
    private $titolo;
    private $descrizione;
    private $isbn;
    private $numeroPagine;
    private $genere;
    private $stato;
    
    const GENERIDISPONIBILI = ['inf'=>'Informatica','ita'=>'Italiano','fin'=>'Finanza','eco'=>'Economia'];
    const STATIDISPONIBILI = [0=>'In prestito',1=>'Disponibile'];
  
    public function aggiungi($libro)
    {
      $this->titolo = $libro["titolo"];
      $this->descrizione = $libro["descrizione"];
      $this->isbn = $libro["isbn"];
      $this->numeroPagine = $libro["numeroPagine"];
      $this->genere = $libro["genere"];
      $this->stato = $libro["stato"];

      $this->salva();
    }

    public function salva() {
      $_SESSION["libri"][$this->isbn] = serialize($this);
    }

    public function svuota() {
      unset($_SESSION["libri"]);
    }

    public function modificaStato($stato) {
      $this->stato = $stato;
      $this->salva();
    }

    public function elimina($isbn) {
      if(isset($_SESSION["libri"][$isbn]))
        unset($_SESSION["libri"][$isbn]);
    }

    public function getIsbn() {
      return $this->isbn;
    }

    public function getStato() {
      return $this->stato;
    }

    public function genereLabel() {
      return $this->genere;
    }

    public function statoLabel() {
      return $this->stato;
    }

    // utilizzerò un template html
    public function stampa()
    {
?>

        <div class="blog-post">
            <div class="callout">
              <h3><?= $this->titolo ?></h3>
              <p><?= $this->isbn?></p>
              <ul class="menu simple">
                <li>Numero pagine: <?= $this->numeroPagine; ?></li>
                <li>Stato: <?= $this->stato; ?></li>
                <li>Genere: <?= $this->genere; ?></li>
              </ul>
              <p><?= $this->descrizione ?></p>
              <br/>
            <a href=<?="dettaglio.php?id=".$this->isbn?>>Modifica</a>
            </div>
        </div>

<?php
    }
}
