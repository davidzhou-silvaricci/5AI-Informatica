*Lunedì, 07 febbraio 2022* + *Mercoledì, 09 febbraio 2022*

> [Leggi gli appunti della lezione](../../notes/07-02-2022.md).

# Esercizio

1. Creazione del database:

    ```sql
    CREATE DATABASE IF NOT EXISTS my_libro_editore DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin;
    ```

2. Seleziono il database appena creato:

    ```sql
    USE my_libro_editore;
    ```

3. Creazione della tabella **libro**:

    ```sql
    CREATE TABLE IF NOT EXISTS libro (
        isbn CHAR(14) PRIMARY KEY,
        titolo VARCHAR(50) NOT NULL,
        editore_nome VARCHAR(50) NOT NULL,
        genere VARCHAR(50) NOT NULL,
        costo DECIMAL(6,2) NOT NULL,
        descrizione TEXT(500),
        peso DECIMAL(4,2),
        nPagine INT,
        CHECK (costo <= 1000 AND CHAR_LENGTH(descrizione) > 255 AND peso <= 10)
    );
    ```

4. Aggiorno le tuple pre-esistenti, nel caso in cui la tabella libro esistesse già:

    ```sql
    UPDATE libro SET isbn = isbn + 'A' WHERE CHAR_LENGTH(isbn) = 13;
    ```

5. Creazione della tabella **editore**:

    ```sql
    CREATE TABLE IF NOT EXISTS editore (
        nome VARCHAR(50) PRIMARY KEY 
    );
    ```

6. Aggiunta della chiave esterna:

    ```sql
    ALTER TABLE libro ADD FOREIGN KEY (editore_nome) REFERENCES editore (nome);
    ```

7. Permettere di inserire per ogni libro 1 o più generi:

    ```sql
    ALTER TABLE libro DROP COLUMN genere;
    ```

    ```sql
    CREATE TABLE IF NOT EXISTS genere (
        nome VARCHAR(50) PRIMARY KEY
    );
    ```

    ```sql
    CREATE TABLE IF NOT EXISTS generi (
        libro_isbn CHAR(14) REFERENCES libro(isbn),
        genere_nome VARCHAR(50) REFERENCES genere(nome),
        PRIMARY KEY(libro_isbn, genere_nome)
    );
    ```

---

1. Si vuole sapere per ogni libro l'editore e per ogni editore il numero di libri

    ```sql
    SELECT titolo, editore FROM libro;
    ```

    ```sql
    SELECT editore, COUNT(l.isbn) numero_libri
    FROM libro l
    RIGHT JOIN editore e ON l.editore_nome = e.nome
    GROUP BY editore
    ORDER BY editore;
    ```

2. Gli editori che hanno pubblicato libri per un totale di almeno 100 euro

    ```sql
    SELECT editore, SUM(l.costo) valore_libri
    FROM libro
    GROUP BY editore
    HAVING valore_libri >= 100
    ORDER BY valore_libri;
    ```

3. Mostrare per ogni genere il numero di libri presenti

    ```sql
    SELECT genere_nome, COUNT(libro_isbn) numero_libri
    FROM generi g
    LEFT JOIN libro l ON g.libro_isbn = l.isbn
    GROUP BY genere_nome
    ORDER BY genere_nome;
    ```