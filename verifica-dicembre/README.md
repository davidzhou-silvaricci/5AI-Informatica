*Lunedì, 6 dicembre 2021*

# Verifica PHP e MySQL

Un'impresa ha la necessità di tenere traccia di tutti gli interventi effettuati dai suoi due tecnici Mario e Luca.

**Per ogni intervento bisogna tener traccia di:**

- Tecnico che ha eseguito l'intervento [ Mario o Luca ]
- Durata dell'intervento in ore
- Parcella (cioè importo dell'intervento)
- Nota dell'intervento effettuato

**Il sistema informatico quindi deve permettere:**

- L'inserimento di un nuovo intervento [20pt]
- La visualizzazione in tabella dell'elenco degli interventi effettuati [15pt]
- La pagina dettaglio dell'intervento [10pt]
- La possibilità tramite un pulsante nella pagina dettaglio di effettuare uno sconto sulla parcella del 30% (solo una volta) [25pt]
- Di visualizzare tutti gli interventi effettuati da Mario o da Luca [10pt]
- L'elenco degli interventi con importo maggiore di 1000 euro (prezzo iniziale non scontato) [10pt]

**Bonus**:

- Permettere la cancellazione di un intervento
- Di tutti gli interventi di visualizzare solo gli interventi senza sconto

L'utilizzo del codice in allagato è opzionale (non è obbligatore seguire tale traccia).  
Per memorizzare i dati utilizzare un database dal nome ***impresa*** con all'interno una ***tabella interventi***.

**Consegnare oltre ai file PHP anche il codice SQL compreso di creazione del db e della tabella.**  
Per creare il database e la tabella è possibile utilizzare qualsiasi programma.