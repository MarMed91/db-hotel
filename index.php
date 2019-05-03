HOTEL:

ROOM:
-ID -- INT -- PRIMARY KEY, AUTO_INCREMENT
- Numero_stanza -- SMALLINT -- UNIQUE, NOT NULL
- Tipologia -- VARCHAR(20)
- Disponibilità -- TINYINT -- DEFAULT(0) --
- Prezzon -- FLOAT(6, 2) -- NULLABLE
- animale -- TINYINT -- DEFAULT(0)
- servicess -- VARCHAR(255)

PERSON:
-ID -- INT -- PRIMARY KEY, AUTO_INCREMENT
- Nome -- VARCHAR(30) -- NOT NULL
- Cognome -- VARCHAR(30) -- NOT NULL
- d.id -- VARCHAR(20) -- NOT NULL
- d.id-tipo -- VARCHAR(10) -- NOT NULL
- data di nascita -- DATE -- NOT NULL
- tel -- VARCHAR(25) -- NULLABLE, UNIQUE

RESERVATION:
-ID -- INT -- PRIMARY KEY, AUTO_INCREMENT
- pagato -- TINYINT -- DEFAULT(0)
- dataDiInizio -- DATE -- NOT NULL
- dataDiFine -- DATE -- NOT NULL
- canale -- VARCHAR(20)
- dataCancellazioneGratuita -- DATE
- Prezzo -- FLOAT(8, 2) -- NOT NULL
- Sconto -- (4, 2) -- DEFAULT(0)

PAGAMENTO:
-ID -- INT -- PRIMARY KEY, AUTO_INCREMENT
- pagato -- TINYINT -- DEFAULT(0)
- canaleDiPagamento -- VARCHAR(15) -- NOT NULL
- dataPagamento -- DATE -- NOT NULL
- allegati -- TEXT

HOTEL: RELAZIONI

  PRENOTAZIONE <---------N--<>--M--------->STANZA
  PRENOTAZIONE <---------N--<>--M--------->PERSONA
  STANZA <---------*--<>--*--------->PERSONA
  PAGAMENTO <---------N--<>--1--------->PERSONA
  PAGAMENTO <---------1--<>--1--------->PRENOTAZIONE
