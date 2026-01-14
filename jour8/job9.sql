-- Écrivez dans le fichier “job09.sql” une requête permettant de sélectionner
-- l’ensemble des informations des étudiants qui ont moins de 18 ans.



SELECT *
FROM etudiants
WHERE (naissance BETWEEN '2006-02-01' AND '2026-01-01');
 ;