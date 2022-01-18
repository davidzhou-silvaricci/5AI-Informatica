*Mercoledì, 12 gennaio 2022*

# Esercizio

```
Supermercato (idS, nome, città, areaMq)
Merce (idM, marca, nome, prezzo, quantità)
Vendita (Supermercato_IdS, Merce_idM, data, quantitàVenduta)
```

Dato lo schema relazionale che rappresenta le vendite online di un insieme di supermercati, dopo aver popolato le tabelle con almeno 5 tuple ciascuna, scrivere le seguenti interrogazioni in linguaggio SQL:

1. Elencare le città dove è stata venduta una determinata merce inserita in input

    ```sql
	SELECT s.citta
    FROM vendita v, merce m, supermercato s
    WHERE m.idM = <input>
    AND v.id_merce = m.idM
    AND v.id_supermercato = s.idS;
	```

2. Elencare il fatturato totale del 2018

    ```sql
	SELECT SUM(v.quantitaVenduta*m.prezzo) fatturato
    FROM vendita v, merce m
    WHERE YEAR(v.data) = 2018
    AND v.id_merce = m.idM;
	```

3. Elencare le merci vendute nel dicembre 2021

    ```sql
	SELECT m.nome
    FROM vendita v, merce m
    WHERE MONTH(v.data) = 12
    AND YEAR(v.data) = 2021
    AND v.id_merce = m.idM;
	```

4. Visualizzare quanti supermercati ci sono

    ```sql
	SELECT COUNT(s.idS) numero_supermercati
    FROM supermercato s;
	```

5. Inserita una merce, calcolare la quantità venduta nel mese di gennaio 2020
   
    ```sql
	SELECT SUM(v.quantitaVenduta) quantitaVenduta
    FROM vendita v, merce m
    WHERE m.idM = <input>
    AND v.id_merce = m.idM
    AND MONTH(v.data) = 1
    AND YEAR(v.data) = 2020;
	```