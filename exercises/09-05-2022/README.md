*Lunedì, 09 maggio 2022*

# Esercizio

1. Elenco dei produttori (nome) che hanno somma di biciclette prodotte inferiore alla media complessiva di biciclette prodotte.

    ```sql
    SELECT p.nome
    FROM produttori p
    JOIN biciclette b ON p.id_produttore = b.id_produttore
    GROUP BY b.id_produttore
    HAVING SUM(b.quantità) <
        -- Media complessiva delle biciclette prodotte
        (SELECT AVG(quantità)
        FROM biciclette);
    ```

2. Elenco delle biciclette (nome) realizzate da produttori che hanno realizzato almeno un modello "tandem".

    ```sql
    SELECT b.nome
    FROM produttori p
    JOIN biciclette b ON p.id_produttore = b.id_produttore
    WHERE b.id_produttore IN
        -- Elenco dei produttori che hanno fatto almeno un modello tandem
        (SELECT DISTINCT p.id_produttore
        FROM produttori p
        JOIN biciclette b ON p.id_produttore = b.id_produttore
        WHERE b.categoria = 'tandem');
    ```

3. Indicazione della categoria di bicicletta che è stata realizzata in numero maggiore rispetto a tutte le altre.

    ```sql
    -- Somma delle quantità per categoria
    CREATE VIEW Somma AS
    SELECT categoria, SUM(quantità) totale
    FROM biciclette
    GROUP BY categoria;

    SELECT categoria
    FROM biciclette
    GROUP BY categoria
    HAVING SUM(quantità) =
        (SELECT MAX(totale)
        FROM Somma);
    ```

4. Elenco delle biciclette prodotte in quantità totale superiore alla media di biciclette da "corsa" realizzate.

    ```sql
    SELECT b.*
    FROM biciclette b
    WHERE quantità >
        -- Quantità media delle biciclette da corsa prodotte
        (SELECT AVG(quantità)
        FROM biciclette
        WHERE categoria = 'corsa');
    ```

5. Visualizzare il totale delle biciclette prodotte dal produttore più antico e il relativo nome del produttore.

    ```sql
    SELECT p.nome, SUM(quantità)
    FROM produttori p
    JOIN biciclette b ON p.id_produttore = b.id_produttore
    WHERE p.data_fondazione =
        -- Data più vecchia
        (SELECT MIN(data_fondazione)
        FROM produttori)
    GROUP BY b.id_produttore;
    ```

6. Visualizzare la media delle bici prodotte di tipo corsa dai produttori che hanno data di fondazione successiva al 1940.

    ```sql
    SELECT AVG(quantità)
    FROM biciclette
    WHERE categoria = 'corsa'
    AND id_produttore IN
        -- Produttori con data di fondazione successiva al 1940
        (SELECT id_produttore
        FROM produttori
        WHERE data_fondazione > 1940);
    ```

7. Creare uno script PHP per eseguire le query 2 e 3 dove "tandem" e "corsa" sono presi in input.