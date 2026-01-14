-- Écrivez dans le fichier “job10.sql” une requête permettant de calculer la
-- superficie de l’ensemble des étages.

SELECT
  superficie,
  SUM(superficie) AS total_superficie
FROM etage ;
