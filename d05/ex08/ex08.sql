SELECT last_name, first_name, DATE(birthdate) AS `birthdate`
FROM user_card
WHERE YEAR(DATE(birthdate)) = '1943'
ORDER BY last_name;