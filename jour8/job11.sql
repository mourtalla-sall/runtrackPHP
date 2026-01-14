-- Écrivez dans le fichier “job11.sql” une requête permettant de sélectionner la
-- somme des capacités des salles.

SELECT
  capacite,
  SUM(capacite) AS total_superficie
FROM salles ;