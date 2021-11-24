*Mercoledì, 24 novembre 2021*

# Esercizio in preparazione alla verifica

Un negozio di articoli sportivi ha bisogno di un sistema informatico per gestire il proprio magazzino.

**Oltre a permettere l'inserimento di un nuovo articolo sportivo:**
- Nome
- Codice univoco
- Quantità
- Prezzo

**Il sistema deve consentire, tramite un semplice pulsante:**
- La rimozione di una unità dal totale (se maggiore di 0)
- Altrimenti mostrare la scritta *Non disponibile*.

Inoltre sarà necessaria una pagina "rifornimento" dove mostrare l'elenco ordinato dei prodotti con una quantità minore di 3 (sempre per quantità crescente), in modo da individuarli velocemente per i nuovi rifornimenti.

> Per ordinare i risultati di una interrogazione al database  
> utilizzare `ORDER BY` nomecampo `ASC` o `DESC`.

**Deve infine essere possibile eliminare un prodotto dal catalogo o modificarne la quantità.**