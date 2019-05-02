
 Customer:
- ID -- INT -- PRIMARY KEY [AUTO_INCREMENT, UNIQUE]
- Name -- VARCHAR(20) -- NOT NULL
- Cognome -- VARCHAR(20) -- NOT NULL
- indirizzo -- VARCHAR(40) -- NOT NULL
- Città -- VARCHAR(30) -- NOT NULL
- Regione -- VARCHAR(30) -- NOT NULL
- Stato -- VARCHAR(30) -- NOT NULL
- mail -- VARCHAR(50) -- NOT NULL
- Tel -- INT -- NOT NULL
- Carta_di_credito -- VARCHAR(40) -- NOT NULL
- Numero_carta -- INT -- NOT NULL
- Scadenza-carta -- DATE
- CheckIn -- DATETIME
- Commenti -- VARCHAR(50)



Room:
- RoomNum -- INT -- PRIMARY KEY
- Type -- VARCHAR(40) -- NOT NULL
- PriceBase -- FLOAT(6, 2) -- NOT NULL
- PricePerAdult -- FLOAT(6, 2) -- NOT NULL
- PricePerChild -- FLOAT(6, 2) -- NOT NULL
