-- Écrivez dans le fichier “job07.sql” une requête permettant de sélectionner
-- l’ensemble des informations des étudiants qui ont plus de 18 ans.





SELECT *
FROM etudiants
WHERE (naissance BETWEEN '1989-01-02'AND '2005-02-01')
 ;