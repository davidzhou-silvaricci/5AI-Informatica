CREATE DATABASE IF NOT EXISTS my_esame_2003;
USE my_esame_2003;

CREATE TABLE IF NOT EXISTS Specie (
    nome VARCHAR(100) PRIMARY KEY,
    descrizione TEXT NOT NULL,
    ubicazione VARCHAR(50) NOT NULL,
    esposizione VARCHAR(100) NOT NULL,
    stagione VARCHAR(20) NOT NULL,
    immagine VARCHAR(255) NOT NULL,
    dipendente_codice_fiscale CHAR(16) NOT NULL
);

ALTER TABLE Specie ADD FOREIGN KEY (dipendente_codice_fiscale) REFERENCES Dipendente(codice_fiscale);

CREATE TABLE IF NOT EXISTS Esemplare (
    codice INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    tipo VARCHAR(100) NOT NULL,
    costo DECIMAL(5,2) NOT NULL,
    quantita INT NOT NULL,
    specie_nome VARCHAR(100) NOT NULL
);

ALTER TABLE Esemplare ADD FOREIGN KEY (specie_nome) REFERENCES Specie(nome);

CREATE TABLE IF NOT EXISTS Coltivazione (
    tipo VARCHAR(50) PRIMARY KEY,
    descrizione TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS modalità (
    specie_nome VARCHAR(100) NOT NULL,
    coltivazione_tipo VARCHAR(50) NOT NULL,
    PRIMARY KEY (specie_nome, coltivazione_tipo)
);

ALTER TABLE modalità ADD FOREIGN KEY (specie_nome) REFERENCES Specie(nome);
ALTER TABLE modalità ADD FOREIGN KEY (coltivazione_tipo) REFERENCES Coltivazione(tipo);

CREATE TABLE IF NOT EXISTS Dipendente (
    codice_fiscale CHAR(16) PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    cognome VARCHAR(50) NOT NULL,
    ruolo VARCHAR(50) NOT NULL,
    telefono VARCHAR(10) DEFAULT NULL,
    anno_assunzione DATE DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS Cliente (
    codice_fiscale CHAR(16) PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    cognome VARCHAR(50) NOT NULL,
    data_nascita DATE NOT NULL,
    telefono VARCHAR(10) DEFAULT NULL,
    is_privato BOOLEAN NOT NULL
);

CREATE TABLE IF NOT EXISTS Intervento (
    codice INT AUTO_INCREMENT PRIMARY KEY,
    data_prenotazione DATE NOT NULL,
    data_esecuzione DATE DEFAULT NULL,
    cliente_codice_fiscale CHAR(16) NOT NULL
);

ALTER TABLE Intervento ADD FOREIGN KEY (cliente_codice_fiscale) REFERENCES Cliente(codice_fiscale);

CREATE TABLE IF NOT EXISTS Attivita (
    codice INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    costo_orario DECIMAL(4,2) NOT NULL
);

CREATE TABLE IF NOT EXISTS richiesta (
    intervento_codice INT NOT NULL,
    attivita_codice INT NOT NULL,
    PRIMARY KEY (intervento_codice, attivita_codice)
);

ALTER TABLE richiesta ADD FOREIGN KEY (intervento_codice) REFERENCES Intervento(codice);
ALTER TABLE richiesta ADD FOREIGN KEY (attivita_codice) REFERENCES Attivita(codice);

CREATE TABLE IF NOT EXISTS svolgimento (
    dipendente_codice_fiscale CHAR(16) NOT NULL,
    intervento_codice INT NOT NULL
    PRIMARY KEY (dipendente_codice_fiscale, intervento_codice)
);

ALTER TABLE svolgimento ADD FOREIGN KEY (dipendente_codice_fiscale) REFERENCES Dipendente(codice_fiscale);
ALTER TABLE svolgimento ADD FOREIGN KEY (intervento_codice) REFERENCES Intervento(codice);

CREATE TABLE IF NOT EXISTS oggetto (
    intervento_codice INT NOT NULL,
    esemplare_codice INT NOT NULL,
    quantita INT,
    PRIMARY KEY (intervento_codice, esemplare_codice)
);

ALTER TABLE oggetto ADD FOREIGN KEY (intervento_codice) REFERENCES Intervento(codice);
ALTER TABLE oggetto ADD FOREIGN KEY (esemplare_codice) REFERENCES Esemplare(codice);