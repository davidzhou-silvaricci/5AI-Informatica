*Lunedì, 17 gennaio 2022*

# Esercizio

**Schema relazionale:**

```
ATTORI (CodAttore, Nome, AnnoNascita, Nazionalità);
RECITA (CodAttore*, CodFilm*)
FILM (CodFilm, Titolo, AnnoProduzione, Nazionalità, Regista, Genere, Durata)
PROIEZIONI (CodProiezione, CodFilm*, CodSala*, Incasso, DataProiezione)
SALE (CodSala, Posti, Nome, Città)
```
> \* indica che è una chiave esterna.

**Scrivere le interrogazioni SQL che restituiscono le seguenti informazioni:**

1. Il nome di tutte le sale di Pisa

	```sql
	SELECT nome
	FROM sale
	WHERE citta = "Pisa";
	```

2. Il titolo dei film di F. Fellini prodotti dopo il 1960

	```sql
	SELECT titolo
	FROM film
	WHERE regista = "F. Fellini"
	AND anno_produzione > 1960;
	```

3. Il titolo e la durata dei film di fantascienza giapponesi o francesi prodotti dopo il 1990

	```sql
	SELECT titolo, durata
	FROM film
	WHERE genere = "Fantascienza"
	AND (nazionalita = "Giappone" OR nazionalita = "Francia")
	AND anno_produzione > 1990;
	```

4. Il titolo ed il genere dei film proiettati il giorno di Natale 2004

	```sql
	SELECT f.titolo, f.genere
	FROM film f, proiezioni p
	WHERE f.cod_film = p.cod_film
	AND p.data_proiezione = "25/12/2004";
	```

5. Il titolo ed il genere dei film proiettati a Napoli il giorno di Natale 2004

	```sql
	SELECT f.titolo, f.genere
	FROM film f, proiezioni p
	WHERE f.cod_film = p.cod_film
	AND p.data_proiezione = "25/12/2004"
	AND p.citta = "Napoli";
	```

6. I nomi delle sale di Napoli in cui il giorno di Natale 2004 è stato proiettato un film con R. Williams

	```sql
	SELECT 
	FROM film f, proiezioni p, recita r, attori a
	WHERE f.cod_film = p.cod_film
	AND f.cod_film = r.cod_film
	AND r.cod_attore = a.cod_attore
	AND p.data_proiezione = "25/12/2004"
	AND p.citta = "Napoli"
	AND a.nome = "R. Williams";
	```

7. Contare quanti posti ci sono complessivamente nei cinema di Napoli

	```sql
	SELECT SUM(posti)
	FROM sale
	WHERE citta = "Napoli";
	```

8. Contare quante proiezioni ha avuto il film *Matrix Resurrections*

	```sql
	SELECT COUNT(*)
	FROM film f, proiezioni p
	WHERE f.cod_film = p.cod_film
	AND f.titolo = "Matrix Resurrections";
	```

	oppure

	```sql
	SELECT COUNT(cod_proiezione)
	FROM film f, proiezioni p
	WHERE f.cod_film = p.cod_film
	AND f.titolo = "Matrix Resurrections";
	```

9. Visualizzare l'incasso minimo e massimo ottenuto da una proiezione nel 2021

	```sql
	SELECT MIN(incasso), MAX(incasso)
	FROM proiezioni
	WHERE YEAR(data_proiezione) = 2021;
	```

	> N.B. Per il momento non siamo ancora in grado di calcolare l'incasso minimo e massimo ottenuto da **un film**, non sapendo fare le SELECT annidate.