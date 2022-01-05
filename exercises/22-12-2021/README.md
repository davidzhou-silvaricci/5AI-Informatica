*Mercoledì, 22 dicembre 2021*

# Esercizio per le vacanze natalizie

**Relazione gestionale ditta Baselli**

Il gestionale richiesto ha lo scopo di gestire i vari interventi (= task, es. installazione antenna) che vengono effettuati presso i clienti dalla ditta Baselli, la quale fornisce assistenza elettrica.

Sono di interesse i **clienti** con i relativi dati anagrafici e gli **interventi** fatti, dei quali interessano la data di inizio, la data presunta ed effettiva di fine intervento e i materiali utilizzati. Per ogni intervento inoltre registrare i dipendenti coinvolti e il numero di ore di lavoro di ciascuno di essi.

Per ogni **dipendente** si devono conoscere, oltre ai dati anagrafici, la mansione ed il costo orario.

Per ogni task, alla conclusione di ogni intervento di un singolo dipendente, viene redatto un **rapportino** riportante, oltre al task, i materiali usati e le ore di lavoro.

Relativamente ai **materiali**, interessano il fornitore, il tipo, il prezzo di acquisto, il prezzo proposto ai clienti e il deposito in magazzino.
Di seguito le funzioni richieste:
- Creazione/elmininazione/modifica dei task che vanno poi assegnati ai dipendenti. Qui si assegnano i dipendenti coinvolti ed il cliente associato al lavoro.
- Creazione/eliminazione/modifica dei rapportini di ogni singolo intervento con l’inserimento dei materiali utilizzati (con quantità). Il rapportino è associato al task, quindi va selezionato a quale task fa riferimento.

Dal task, poi sarà possibile generare la fattura, andando a leggere tutti i rapportini, tutti i materiali e le figure professionali coinvolte, con la possibilità di applicare uno sconto in fase di revisione, prima di generare la stampa.

**Consegnare entro il 10 gennaio:**
- Diagramma E-R
- Modello logico
- Modello fisico
- File SQL di creazione del DB
- Risposta alle seguenti select SQL:
  - Elenco dei task del 2021
  - Elenco dei rapportini di un determinato task
  - Calcolo delle ore prestate da un determinato dipendente in un mese indicato
  - Calcolo dello stipendio di un determinato dipendente in un mese specifico.

## Svolgimento

### Modello concettuale

![Schermata 1](Schermata%201.png)
![Schermata 2](Schermata%202.png)
![Schermata 3](Schermata%203.png)

### Modello logico

- Cliente (<ins>codice_cliente</ins>, nome, cognome, codice_fiscale)
- Dipendente (<ins>codice_dipendente</ins>, nome, cognome, codice_fiscale, mansione, costo_orario)
- Intervento (<ins>codice_intervento</ins>, descrizione, data_inizio, data_fine, cliente)
  - con v.i.r. di cliente con Cliente (codice_cliente)
- Materiale (<ins>codice_materiale</ins>, fornitore, tipo, costo, prezzo, deposito)
- Rapportino (<ins>codice_rapportino</ins>, intervento)
  - con v.i.r. di intervento con Intervento (codice_intervento)
- partecipazione (<ins>intervento</ins>, <ins>dipendente</ins>, ore)
  - con v.i.r. di intervento con Intervento (codice_intervento)
  - con v.i.r. di dipendente con Dipendente (codice_dipendente)
- utilizzo (<ins>intervento</ins>, <ins>materiale</ins>)
  - con v.i.r. di internento con Intervento (codice_intervento)
  - con v.i.r. di materiale con Materiale (codice_materiale)

### [Modello fisico](my_ditta_baselli.sql)

### Select SQL

  - Elenco dei task del 2021:

	```sql
	SELECT *
	FROM Intervento
	WHERE YEAR(data_inizio) = "2021"
	```

  - Elenco dei rapportini di un determinato task:
	
	```sql
	SELECT *
	FROM Rapportino
	WHERE codice_rapportino = 1
	```
	
  - Calcolo delle ore prestate da un determinato dipendente in un mese indicato:
	
	```sql
	SELECT SUM(p.ore) ore_totali
	FROM partecipazione p, Intervento i
	WHERE p.intervento = i.codice_intervento
	AND MONTH(i.data_inizio) = "gennaio"
	```
	
  - Calcolo dello stipendio di un determinato dipendente in un mese specifico:
	
	```sql
	SELECT (p.ore * d.costo_orario) stipendio_mensile
	FROM partecipazione p, Dipendente d, Intervento i
	WHERE p.dipendente = d.codice_dipendente
	AND p.intervento = i.codice_intervento
	AND MONTH(i.data_inizio) = "gennaio"
	```
	