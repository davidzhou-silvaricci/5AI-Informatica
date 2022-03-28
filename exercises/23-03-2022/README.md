*Lunedì, 28 marzo 2022*

# Esercizio

**Interrogazioni**

1. Dato il nome di una pianta, riportare quanti esemplari di quella pianta sono presenti nelvivaio;

	```sql
	SELECT quantità
	FROM Esemplare
    WHERE nome = "<input>";
	```

2. Dato il nome di una stagione, visualizzare il nome delle piante che fioriscono in quella stagione;

	```sql
	SELECT e.nome
	FROM Specie s
    JOIN Esemplare e ON s.nome = e.specie_nome
    WHERE s.stagione = "<input>";
	```

3. Dato il nome di un intervento esterno, tra quelli previsti dal vivaio, riportare il nome e il telefono dei soggetti che hanno richiesto quell'intervento nel corso di un determinato anno solare;

	```sql
	SELECT c.nome cliente, c.telefono
	FROM Attivita a, richiesta r, Intervento i, Cliente c
    WHERE a.codice = r.attivita_codice
    AND r.intervento_codice = i.codice
    AND i.cliente_codice_fiscale = c.codice_fiscale
    AND a.nome = "<input>"
    AND YEAR(i.data_prenotazione) > YEAR(DATEADD(<input>, -1, GETDATE()));
	```

4. Dato il nome di un agronomo, riportare quanti esemplari di piante sono sotto la sua responsabilità;

	```sql
	SELECT COUNT(e.codice) quantita
	FROM Dipendente d, Specie s, Esemplare e
    WHERE d.codice_fiscale = s.dipendente_codice_fiscale
    AND s.nome = e.specie_nome
    AND d.ruolo = "Agronomo"
    AND d.nome = "<input>";
	```

5. Visualizzare nome, descrizione e quantità di esemplari presenti nel vivaio, della pianta più economica da interno;

	```sql
	SELECT e.nome, s.descrizione, e.quantita
	FROM Esemplare e, Specie s
    WHERE e.specie_nome = s.nome
    AND e.tipo = "interno"
    AND costo = SELECT MIN(costo)
				FROM Esemplare;
	```

6. Riportare nome degli interventi richiesti non ancora evasi con il nome e il telefono del richiedente.

	```sql
	SELECT c.nome cliente, c.telefono, a.nome attivita
	FROM Attivita a, richiesta r, Intervento i, Cliente c
    WHERE a.codice = r.attivita_codice
    AND r.intervento_codice = i.codice
    AND i.cliente_codice_fiscale = c.codice_fiscale
    AND i.data_esecuzione = NULL OR i.data_esecuzione = '';
	```