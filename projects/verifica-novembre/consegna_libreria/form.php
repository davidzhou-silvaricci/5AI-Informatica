<?php
include('autoloader.php');
include('header.php');
?>


<div class="row medium-8 large-7 columns">

  <div class="grid-x grid-padding-x">
    <div class="large-6 cell">


      <form action="index.php" method='POST' enctype="multipart/form-data">
        <label>Titolo</label>
        <input class='form-input' type="text" id="titolo" name="titolo">
        <label>ISBN</label>
        <input type="text" id="isbn" name="isbn">
        <label>Numero di pagine</label>
        <input type="text" id="numeroPagine" name="numeroPagine">
        <label>genere</label>

        <select id="genere" name="genere">
          <option value="Informatica">Informatica</option>
          <option value="Italiano">Italiano</option>
          <option value="Finanza">Finanza</option>
          <option value="Economia">Economia</option>
        </select>

        <div>
          <input type="radio" id="stato" name="stato" value="Disponibile">
          <label>Disponibile</label>
        </div>

        <div>
          <input type="radio" id="stato" name="stato" value="In prestito">
          <label>In prestito</label>
        </div>

        <label>Descrizione</label>
        <textarea id="descrizione" name="descrizione" rows="4" cols="50"></textarea>

        <input class='button small expanded' type="submit" name=submit value="Aggiungi">

      </form>
    </div>
  </div>

</div>
</body>

</html>