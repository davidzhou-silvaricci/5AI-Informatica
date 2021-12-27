*Mercoledì, 20 ottobre 2021*

# Esercizio

**Realizzare una pagina che visualizza e salva le seguenti impostazioni**,  
che valgono solo per l'utente che sta utilizzando l'applicazione:

- Nome tema
- Numero voci per pagina
- Modalità scura/chiara
- Soft/hard delete

> ⚠️ Avendo solo una pagina di impostazioni, non ci serve un'array multidimensionale. È sufficiente memorizzare in $_SESSION["settings"] un oggetto Settings.

---

### Update

Modificare l'esercizio aggiungendo le seguenti funzionalità:
- Permettendo all'utente, in una pagina apposita, di scegliere tra almeno 3 combinazioni predefinite;
> 💡 Ogni combinazione è un link che aggiunge un parametro GET, il quale richiama un metodo che imposta i valori.
- Stampare nel div di una pagina un elenco ( inventato ) di N pagine, con la classe del tema grafico e colore dark/light;
- Inserire un pulsante ( finto ) nominato soft o hard delete.