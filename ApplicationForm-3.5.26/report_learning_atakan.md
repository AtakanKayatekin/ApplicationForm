# Sintesi dell’apprendimento assistito da AI

## Progetto Vue + PHP Contact Form

### Panoramica

Durante lo sviluppo di un progetto di contact form con Vue + PHP, l’AI è stata utilizzata come assistente di apprendimento per supportare il debug, la comprensione dell’architettura e la strutturazione del progetto. L’obiettivo non era delegare il lavoro, ma chiarire concetti e migliorare la comprensione tecnica.

---

### Principali Sfide Identificate

* Difficoltà nell’aggiungere dati a un file JSON senza sovrascriverlo.
* Incertezza su come gestire risultati vuoti o non validi di `json_decode()`.
* Confusione nel collegare il frontend Vue al backend PHP tramite `fetch()`.
* Percorsi relativi errati che causavano errori “404 Not Found”.
* Comprensione limitata del comportamento del server localhost e del routing.
* Esperienza limitata nella scrittura di documentazione di progetto strutturata (README).

---

### Cosa è Stato Imparato

* Gestione sicura dei file JSON in PHP (`file_exists`, `is_array`, logica corretta per appendere dati).
* Chiara separazione tra frontend (UI, validazione lato client) e backend (persistenza dei dati, validazione lato server).
* Posizionamento corretto e utilizzo di `fetch()` all’interno di un componente Vue Single File.
* Come fluiscono le richieste HTTP: browser → PHP → storage JSON.
* Uso degli strumenti di sviluppo del browser per il debug (tab Rete, codici di stato).
* Scrivere un README file strutturato e deterministico.
* NOTE: L'attenzione non era rivolta alla memorizzazione della sintassi, ma all'apprendimento della logica generale. Non è ancora compresa al 100%, ma sono stati fatti progressi.

---

### Come è Stato Usato l’AI

L’AI ha funzionato come:

* Assistente al debug
* Revisore del codice
* Spiegatore concettuale
* Consigliere sulla strutturazione del progetto

Tutte le modifiche sono state testate manualmente, privilegiando la comprensione rispetto al copia-incolla delle soluzioni.

---

### Risultato


Questo processo ha rafforzato la comprensione pratica della comunicazione HTTP, della configurazione di server locali e dell’architettura base di un’API.
