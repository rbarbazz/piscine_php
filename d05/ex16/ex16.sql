SELECT COUNT(*) AS movies
FROM member_history
WHERE ((`date` > '2006-10-30' AND `date` < '2007-07-27') AND `date` != '2006-12-24')
OR (`date` REGEXP '-12-24');