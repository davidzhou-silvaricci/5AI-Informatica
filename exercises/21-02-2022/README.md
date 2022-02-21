*Lunedì, 21 febbraio 2022*

# Esercizio in preparazione alla verifica

L'Associazione **GAIT** - **G**ruppo **A**nziani **I**taliani **T**ecnologici (*) - desidera realizzare un'applicazione web studiata per aiutare le persone anziane a ritrovare gli oggetti che conservano (o, per motivi di sicurezza nascondono) in diversi luoghi (nascondigli) delle loro abitazioni.

Com'è noto, le persone di una certa età possono raccontare nei dettagli fatti risalenti a decenni prima mentre hanno difficoltà a ricordare quanto è successo qualche giorno fa, o anche poco fa.

L'applicazione deve offrire un'interfaccia estremamente semplice, facile da usare, e che utilizzi font chiari, di grandi dimensioni. Se il servizio offerto avrà il successo sperato, l'applicazione sarà implementata anche come **App** per dispositivi mobili, in piena sintonia con lo spirito che anima il GAIT, sempre attento a tenere il passo con le innovazioni tecnologiche che possono migliorare la qualità della vita.

Negli incontri avvenuti tra gli esperti informatici e i rappresentanti del GAIT è emersa l'opportunità di integrare i dati strettamente necessari per la Gestione Oggetti Nascosti - GON è il nome attribuito al progetto - con altri dati, utili per elaborazioni di tipo statistico e di rilevanza sociale. Questo ha portato alle definizione dei seguenti requisiti.

Un'**abitazione** è individuata dal codice catastale ed è descritta da indirizzo (completo di via/piazza, numero civico, CAP, località e provincia) e dai nomi delle persone che ci abitano. Può essere un appartamento, una casetta a schiera, una villetta mono/bifamiliare, un attico, …). È formata da più stanze (un monolocale di fatto ha anche il bagno) di diverse tipologie: cucina, salotto, sala da pranzo, bagno, lavanderia, ripostiglio, …) e può avere dei garage e/o posti auto.

Una stanza è individuata da un codice progressivo all'interno dell'abitazione determinato - ove possibile - dalla visita dell'abitazione in senso orario ed è descritta dalle sue dimensioni, dal numero di finestre, di balconi e dai principali pezzi di arredamento in essa sistemati: armadio, letto, cassettiera, guardaroba, …

Gli oggetti di cui si vuole tenere traccia sono di varia natura, in accordo alla seguente classificazione:
- Documenti (di identità, patente, passaporto, tessere associative, …)
- Preziosi (orologi, anelli, …)
- Chiavi (di casa. della macchina, della bicicletta, …)
- Abbonamenti (di cinema, teatro, serie di concerti, …)

Un oggetto ha una descrizione e l'indicazione della persona cui appartiene.

Per ciascun oggetto si memorizza la stanza e il mobile in cui è conservato, la data in cui vi è stato riposto ed eventuali note per individuarne esattamente la collocazione (terzo cassetto a destra, intercapedine tra cassetti e fondo, tra le calze di lana, …).

Quando un oggetto viene spostato si memorizza la data in cui è avvenuto lo spostamento (può essere interessante ricostruire la storia degli spostamenti di un oggetto).

Un certo oggetto può stare al più in un posto.

**Il candidato, fatte le ipotesi aggiuntive che ritiene opportune, sviluppi:**

1. Un'analisi della realtà di riferimento individuando le possibili soluzioni e scelga quella che a suo motivato giudizio è la più idonea a rispondere alle specifiche indicate
2. Lo schema concettuale della base di dati
3. Lo schema logico relazionale della base di dati
4. La definizione in linguaggio SQL di un sottoinsieme delle relazioni della base di dati in cui siano presenti vincoli di dominio e vincoli di integrità referenziale
5. Codifichi in linguaggio SQL **solo quattro** tra le interrogazione, rivolte a ottenere i seguenti risultati:
   1. Oggetti di una persona con le indicazioni di dove sono riposti
   2. Oggetti presenti in un'abitazione ordinati per nome del proprietario e descrizione
   3. Abitazioni in ordine di CAP e via, con superficie, numero di persone, metri quadrati disponibili per persona
   4. Anni e numero di persone nate in ogni anno, suddivise per genere, ordinati per anno crescente
   5. Età e numero di persone di ogni età, suddivise per genere, ordinate per età decrescente
6. La codifica in un linguaggio a scelta di un breve, purché significativo, segmento dell'applicazione web che consente l'interazione con la base di dati. e il relativo file SQL con la creazione del DB.

**(*) Gait: andatura, passo (qui: tenere il il passo con i tempi).**