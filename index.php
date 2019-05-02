
 Customer:
- Name -- VARCHAR(20) -- NOT NULL
- Cognome -- PRIMARY KEY -- VARCHAR(20) -- NOT NULL
- Indirizzo -- VARCHAR(40) -- NOT NULL
- Città -- VARCHAR(30) -- NOT NULL
- Regione -- VARCHAR(30) -- NOT NULL
- Stato -- VARCHAR(30) -- NOT NULL
- Mail -- VARCHAR(50) -- NOT NULL
- Tel -- INT -- NOT NULL
- Carta_di_credito -- VARCHAR(40) -- NOT NULL
- Numero_carta -- INT -- NOT NULL
- Scadenza_carta -- DATE
- CheckIn -- DATETIME
- Commenti -- VARCHAR(50)

|  Name  | Cognome | Indirizzo | Città | Regione | Stato | Mail  | Tel | Carta_di_credito  | Numero_carta  | Scadenza_carta  | CheckIn | Commenti  |
---------------------------------------------------------------------------------------------------------------------------------------------------
  Pippo    Russo
  Marco    Medic
Room:
- Numero_stanza -- INT -- PRIMARY KEY
- Tipologia -- VARCHAR(40) -- NOT NULL
- Prezzo -- FLOAT(6, 2) -- NOT NULL
- PezzoAdulti -- FLOAT(6, 2) -- NOT NULL
- PrezzoBambini -- FLOAT(6, 2) -- NOT NULL

|  Numero_stanza  | Tipologia | Prezzo | PrezzoAdulti | PrezzoBambini | Cognome_user|

      123            un letto                                               Russo
      124            due letti                                              Medic
      125            un letto                                               Russo
-----------------------------------------------------------------------
