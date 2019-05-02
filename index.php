
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
- Scadenza-carta -- DATE
- CheckIn -- DATETIME
- Commenti -- VARCHAR(50)



Room:
- Numero_stanza -- INT -- PRIMARY KEY
- Tipologia -- VARCHAR(40) -- NOT NULL
- Prezzo -- FLOAT(6, 2) -- NOT NULL
- PezzoAdulti -- FLOAT(6, 2) -- NOT NULL
- PrezzoBambini -- FLOAT(6, 2) -- NOT NULL
