*Lunedì, 07 febbraio 2022*

> [Leggi gli appunti della lezione](../../notes/07-02-2022.md).

# Esercizio

```sql
CREATE DATABASE my_libro_editore DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin;

USE my_libro_editore;

CREATE TABLE libro (
    isbn CHAR(14) PRIMARY KEY,
    titolo VARCHAR(50) NOT NULL,
    editore_nome VARCHAR(50) NOT NULL,
    genere VARCHAR(50) NOT NULL,
    costo DECIMAL(6,2) NOT NULL,
    descrizione TEXT(300),
    peso DECIMAL(4,2),
    nPagine INT
);

UPDATE libro SET isbn = isbn + 'A' WHERE CHAR_LENGTH(isbn) = 13;

ALTER TABLE libro ADD FOREIGN KEY (editore_nome) REFERENCES editore (nome);

CREATE TABLE editore (
    nome VARCHAR(50) PRIMARY KEY 
);
```