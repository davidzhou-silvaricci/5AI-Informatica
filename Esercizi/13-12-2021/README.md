*Lunedì, 13 dicembre 2021*

# Esercizio

**Realizzare in SQL le seguenti tabelle:**

- Libro ( ISBN - Titolo - Descrizione - Numero di pagine - Costo - Data di uscita - Autore - Genere )
- Autore ( id - Nome - Cognome - Data di nascita )
- Genere ( id - Nome - Descrizione )

Inserire per ogni tabella almeno 4 record.
> [generatedata.com](https://generatedata.com/),
> [Mockaroo](https://www.mockaroo.com/), 
> [Online data generator](https://www.onlinedatagenerator.com/)

**Scrivere le seguenti SELECT:**

1. Lista di libri usciti dal 1 gennaio 2020:

    ```sql
	SELECT * FROM libri WHERE dataUscita > "1/1/2020";
	```

2. Lista autori di nome Mario:

    ```sql
	SELECT * FROM autori WHERE nome = "Mario";
	```

3. Lista di autori nati prima del 1950:

    ```sql
	SELECT * FROM autori WHERE YEAR(dataNascita) < 1950;
	```

4. Lista dei libri con un costo inferiore a 10 euro:

    ```sql
	SELECT * FROM libri WHERE costo < 10;
	```

**Scrivere il codice SQL per:**

- Modificare il nome di un genere:
  
    ```sql
	UPDATE generi SET nome = x WHERE id = y;
	```

- Modificare il numero di pagine di un libro:

    ```sql
	UPDATE libri SET pagine = x WHERE isbn = y;
	```

- Modificare la data di nascita di un autore:

    ```sql
	UPDATE autori SET dataNascita = x WHERE id = y;
	```