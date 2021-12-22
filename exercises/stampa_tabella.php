<!-- Scrivere una funzione che stampi una tabella ogni volta che viene richiamata -->

<style>
  td {
    text-align: center;
    border: 1px solid black;
    padding: 1rem;
  }
</style>

<?php

function tabella($a, $b) {
    echo "<table>";
    $k = 0;
    for($i = 0; $i < $b; $i++)
    {
        echo "<tr>";
        for($j = 0; $j < $a; $j++)
        {
            $k++;
            echo "<td>$k</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

tabella(2, 2);
tabella(4, 8);
tabella(10, 6);

?>