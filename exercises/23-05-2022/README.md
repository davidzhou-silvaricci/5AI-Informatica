*Lunedì, 23 maggio 2022*

# Esercizio

1. Visualizzare il nome del negozio che ha totalizzato la vendita maggiore in
assoluto, il relativo importo e la denominazione della categoria.

    ```sql
    SELECT v.negozio, v.importo, c.denominazione categoria
    FROM vendite v
    JOIN categorie c ON v.id_categoria = c.id_categoria
    WHERE v.importo IN
        (SELECT MAX(importo)
        FROM vendite);
    ```

2. Visualizzare il totale delle vendite per regione e la relativa denominazione
della regione.

    ```sql
    SELECT r.nome_regione, SUM(v.importo) totale_vendite
    FROM vendite v
    RIGHT JOIN regioni r ON v.id_regione = r.id_regione
    GROUP BY r.id_regione;
    ```

3. Visualizzare la media delle vendite per categoria (denominazione della
categoria).

    ```sql
    SELECT c.denominazione categoria, AVG(v.importo) media_vendite
    FROM vendite v
    RIGHT JOIN categorie c ON v.id_categoria = c.id_categoria
    GROUP BY c.id_categoria;
    ```

4. Visualizzare il negozio che ha totalizzato la vendita minore in assoluto,
l’importo e la regione di appartenenza del negozio.

    ```sql
    SELECT v.negozio, v.importo, r.nome_regione
    FROM vendite v
    JOIN regioni r ON v.id_regione = r.id_regione
    WHERE v.importo IN
        (SELECT MIN(importo)
        FROM vendite);
    ```

5. Visualizzare tutti i negozi (denominazione) che hanno una media di vendite
superiore alla media generale delle vendite.

    ```sql
    SELECT negozio, AVG(importo) media_vendite
    FROM vendite
    GROUP BY negozio
    HAVING media_vendite >
        -- Media di tutte le vendite
        (SELECT AVG(importo)
        FROM vendite);
    ```