*Mercoledì, 02 febbraio 2022*

# Esercizio

Dato il seguente schema relazionale:

- **libro** (<ins>isbn</ins>, genere, numero_pagine, prezzo, casa_editrice)
- **casa_editrice** (<ins>nome</ins>, città, telefono)
- **autore** (<ins>nome</ins>, <ins>cognome</ins>, nazionalità, data_nascita, data_morte)
- **ha_scritto** (<ins>isbn</ins>, <ins>nome</ins>, <ins>cognome</ins>)

Dopo aver disegnato il modello E-R rispondere alle seguenti interrogazioni:

1. Elencare gli autori vivi in ordine di cognome e nome

    ```sql
	SELECT *
    FROM autore
    WHERE data_morte IS NULL
    ORDER BY cognome, nome;
	```

2. Visualizzare nome e cognome di chi ha scritto “ZANNA BIANCA”

    > Aggiungere con ALTER la colonna ***titolo***.  
    > `ALTER TABLE libro ADD titolo varchar(50)`

    ```sql
	SELECT nome, cognome
    FROM autore a, libro l, ha_scritto h
    WHERE h.isbn = l.isbn
    AND h.nome = a.nome
    AND h.cognome = a.cognome
    AND l.titolo = 'Zanna Bianca';
	```

3. Elencare i libri di autori russi che costano più di 20 euro

    ```sql
	SELECT l.*
    FROM autore a, libro l, ha_scritto h
    WHERE h.isbn = l.isbn
    AND h.nome = a.nome
    AND h.cognome = a.cognome
    AND a.nazionalita = 'Russia'
    AND l.prezzo > 20;
	```

4. Contare e visualizzare quanti libri di autori francesi sono presenti in libreria

    ```sql
	SELECT COUNT(DISTINCT(h.isbn))
    FROM autore a, ha_scritto h
    WHERE h.nome = a.nome
    AND h.cognome = a.cognome
    AND a.nazionalita = 'Francia';
	```

5. Stampare i libri di autori francesi

    ```sql
	SELECT l.*
    FROM ha_scritto h
    INNER JOIN libro l ON h.isbn = l.isbn
    INNER JOIN autore a ON h.nome = a.nome AND h.cognome = a.cognome
    WHERE a.nazionalita = 'Francia';
	```

6. Trovare la somma dei costi dei libri gialli

    ```sql
	SELECT SUM(prezzo)
    FROM libro
    WHERE genere = 'Giallo';
	```

7. Visualizzare il costo minimo tra i libri di narrativa

    ```sql
	SELECT MIN(prezzo)
    FROM libro
    WHERE genere = 'Narrativa';
	```

8. Visualizzare il numero di autori per ogni nazionalità

    ```sql
	SELECT COUNT(*), nazionalita
    FROM autore
    GROUP BY nazionalita;
	```

9. Trovare i libri pubblicati da case editrici veneziane e scritti da autori italiani vivi

    ```sql
	SELECT l.*
    FROM autore a, libro l, casa_editrice c
    WHERE c.nome = l.casa_editrice
    AND a.data_morte IS NULL
    AND a.nazionalita = 'Italia'
    AND c.citta = 'Venezia';
	```

10. Pubblicare gli autori il cui cognome, di 5 lettere, inizia per R e termina per I

    ```sql
	SELECT *
    FROM autore
    WHERE cognome LIKE 'R___I';
	```