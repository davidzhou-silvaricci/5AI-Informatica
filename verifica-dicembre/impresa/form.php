<?php
include('autoloader.php');
include('header.php');


?>

<div class="row medium-8 large-7 columns">

<div class="grid-x grid-padding-x">
  <div class="large-6 cell">
 
  
          <h3>Aggiungi un nuovo intervento</h3>
          <form action="<?= Url::toHome()?>" method='POST'>
            <label for="tecnico">Tecnico</label>
            <select name="tecnico" id="tecnico" required>
              <option value="Mario">Mario</option>
              <option value="Luca">Luca</option>
            </select>
            <label for="durata">Durata (ore)</label>
            <input type="number" id="durata" name="durata" min="1" placeholder="1" required>
            <label for="parcella">Parcella</label>
            <input type="number" id="parcella" name="parcella" placeholder="€0">
            <label for="nota">Annotazioni</label>
            <textarea id="nota" name="nota" rows="4" cols="50" placeholder="Nota dell'intervento effettuato"></textarea>
            <input class='button small expanded' type="submit" name=submit value="Aggiungi">

          </form>
          
  </div>
</div>     
</body>
</html>
