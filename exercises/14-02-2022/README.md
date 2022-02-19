*Lunedì, 14 febbraio 2022*

# Esercizio

Progettare un database per gestire le prenotazioni di una serie di alberghi al mare.

- Per ogni albergo si hanno, oltre i vari dati della struttura, il numero delle camere ed il costo (si suppone che le camere siano tutte uguali).
- Considerare le prenotazioni per le camere fatte da persone;
- Per ogni persona si hanno i dati identificativi;
- Per ogni prenotazione si hanno anche la data di inizio e il numero di notti prenotate.

---

### Modello logico

- Albergo(<ins>idAlbergo</ins>, nome, numCamere, costo)
- Persona(<ins>idPersona</ins>, nominativo)
- Prenotazione(<ins>idPrenotazione</ins>, dataInizio, numNotti, persona)
  - Con v.i.r. di persona con Persona(idPersona)
- Camera(<ins>idCamera</ins>, stato, idAlbergo)
  - Con v.i.r. di idAlbergo con Albergo(idAlbergo)
- registrazioni(<ins>idPrenotazione</ins>, <ins>idCamera</ins>)
  - Con v.i.r. di idPrenotazione con Prenotazione(idPrenotazione)
  - Con v.i.r. di idCamera con Camera(idCamera)

### Modello fisico

```sql
CREATE DATABASE IF NOT EXISTS my_gestione_alberghi;

USE my_gestione_alberghi;

CREATE TABLE IF NOT EXISTS Albergo (
    idAlbergo INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    numCamere INT NOT NULL,
    costo DECIMAL(6,2) NOT NULL
);

CREATE TABLE IF NOT EXISTS Persona (
    idPersona INT PRIMARY KEY AUTO_INCREMENT,
    nominativo VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS Prenotazione (
    idPrenotazione INT PRIMARY KEY AUTO_INCREMENT,
    dataInizio DATE NOT NULL,
    numNotti INT NOT NULL,
    persona_id INT NOT NULL
);

ALTER TABLE Prenotazione ADD FOREIGN KEY (persona_id) REFERENCES Persona(idPersona);

CREATE TABLE IF NOT EXISTS Camera (
    idCamera INT PRIMARY KEY AUTO_INCREMENT,
    stato CHAR(10) DEFAULT 'libera',
    albergo_id INT NOT NULL
);

ALTER TABLE Camera ADD FOREIGN KEY (albergo_id) REFERENCES Albergo(idAlbergo);

CREATE TABLE IF NOT EXISTS registrazioni (
    prenotazione_id INT,
    camera_id INT,
    PRIMARY KEY (prenotazione_id, camera_id)
);

ALTER TABLE registrazioni ADD FOREIGN KEY (prenotazione_id) REFERENCES Prenotazione(idPrenotazione);

ALTER TABLE registrazioni ADD FOREIGN KEY (camera_id) REFERENCES Camera(idCamera);
```

### Interrogazioni

**Rispondere alle seguenti interrogazioni SQL:**

1. Numero delle camere libere per una struttura in determinato periodo

    ```sql
    SELECT COUNT(c.idCamera) camere_libere
    FROM Prenotazione p, Camera c, registrazioni r, Albergo a
    -- Join
    WHERE r.prenotazione_id = p.idPrenotazione
    AND r.camera_id = c.idCamera
    AND c.albergo_id = a.idAlbergo
    -- Condizioni
    AND a.nome = <nome>
    AND p.dataInizio < inzioPeriodo
    AND DAY(p.dataInzio) + p.numNotti < DAY(inizioPeriodo)
    AND p.dataInizio > finePeriodo;
    ```

2. Per un periodo, le strutture con almeno una camera disponibile

    ```sql
    SELECT a.nome, COUNT(c.idCamera) camere_libere
    FROM Prenotazione p, Camera c, registrazioni r, Albergo a
    -- Join
    WHERE r.prenotazione_id = p.idPrenotazione
    AND r.camera_id = c.idCamera
    AND c.albergo_id = a.idAlbergo
    -- Condizioni
    AND p.dataInizio < inzioPeriodo
    AND DAY(p.dataInzio) + p.numNotti < DAY(inizioPeriodo)
    AND p.dataInizio > finePeriodo;
    GROUP BY a.nome
    HAVING COUNT(c.idCamera) > 1;
    ```
   
3. Tutte le strutture sold out per un determinato giorno
   
    ```sql
    SELECT a.nome
    FROM Prenotazione p, Camera c, registrazioni r, Albergo a
    -- Join
    WHERE r.prenotazione_id = p.idPrenotazione
    AND r.camera_id = c.idCamera
    AND c.albergo_id = a.idAlbergo
    -- Condizioni
    AND p.dataInizio = inizioPeriodo
    OR (p.dataInizio < inzioPeriodo AND DAY(p.dataInzio) + p.numNotti > DAY(inizioPeriodo))
    GROUP BY a.nome
    HAVING COUNT(c.idCamera) = a.numCamere;
    ```
   
4. Tutte le strutture con prenotazioni totali per almeno 1000 euro
   
    ```sql
    SELECT a.nome, SUM(a.costo * p.numNotti)
    FROM Prenotazione p, Camera c, registrazioni r, Albergo a
    -- Join
    WHERE r.prenotazione_id = p.idPrenotazione
    AND r.camera_id = c.idCamera
    AND c.albergo_id = a.idAlbergo
    -- Condizioni
    GROUP BY a.nome
    HAVING SUM(a.costo * p.numNotti) >= 1000;
    ```