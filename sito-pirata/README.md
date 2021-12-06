*Mercoledì, 17 novembre 2021*

# Esercizio in preparazione alla verifica

Una banda di hackers commercializza abusivamente software di vario tipo: sistemi operativi, pacchetti professionali e non,  giochi, ...

**Data la notevole mole di software trattato decide di progettare una base di dati con tutte le informazioni relative ad ogni prodotto:**
- Tipo di prodotto [ sistema operativo - grafica - giochi] 
- Software house che lo produce [ microsoft - apple - google ] 
- Configurazione minima della macchina su cui può girare, provenienza del materiale, supporto sul quale è disponibile e il numero di unità necessarie.

**Servono anche i dati dei clienti cui il materiale è stato distribuito, con:**
- Dati anagrafici
- Professione [ informatico - studente - altro ] 
- Numero di telefono.

**Progettare un sistema informativo che rappresenti la realtà descritta, permetta l’inserimento e la cancellazione delle voci tramite alcune pagine web e che sia in grado di rispondere anche alle seguenti interrogazioni:**
- Q1) Elenco del software per singola tipologia
- Q2) Elenco dei clienti per singola professione

Reminder: in Connection.php eliminare riga 24 e 25; in altre parole nella funzione query() elimianre print_r e die.