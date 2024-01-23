# Esercizi algebra relazionale

Date le seguenti relazioni:

* Impiegato(__Matricola__, Cognome, Stipendio, Dipartimento)
* Dipartimento(__Codice__, Nome, Sede, Direttore)
* Progetto(__Sigla__, Nome, Bilancio, Responsabile)
* Partecipazione (__Impiegato__,__Progetto__)

con vincoli:
* tra l'attributo Dipartimento della relazione Impiegato e la relazione Dipartimento
* tra l'attributo Direttore della relazione Dipartimento e la relazione Impiegato
* tra l'attributo Responsabile della relazione Progetto e la relazione Impiegato
* tra l'attributo Impiegato della relazione Partecipazione e la relazione Impiegato
* tra l'attributo Progetto della relazione Partecipazione e la relazione Progetto

## Formulare le seguenti interrogazioni in algebra relazionale

* Trovare matricola e cognome degli impiegati che guadagnano meno di 30 milioni
* Trovare cognome e stipendio degli impiegati che non lavorano a Pisa.
* Trovare i bilanci dei progetti e i cognomi dei responsabili.
* Trovare cognome e stipendio degli impiegati che sono direttori di dipartimento.
* Trovare i nomi dei progetti con bilancio fra 50K e 100K e i cognomi degli impiegati che
lavorano su di essi
* Trovare nomi dei dipartimenti in cui lavorano impiegati che guadagnano meno di 80K.
