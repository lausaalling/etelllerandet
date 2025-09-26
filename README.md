#hvis man skal bruge databasen
lav en "require_once "Database.php";" for at connecte til databasen 
den skriver connection succesfuld nu det bliver fjernet senere

tilføj bruger ved at skrive: "addbruger(mail, password, name);" husk at skifte mail, password og name

post snak ved brug af "PostSnak("navn", "titel", "indhold", "tags", "film");"

post forslag ved brug af "PostSnak("navn", "titel", "indhold");"

post anmeld ved brug af "PostSnak("navn", "titel", "indhold", "tags", "film");"

opdater likkes ved brug af "UpdateLikeSnak("id");" og "unUpdateLikeSnak(55);"