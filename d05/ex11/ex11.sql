SELECT upper(last_name) AS `NAME`, first_name, subscription.price
FROM user_card
INNER JOIN member ON id_user = id_member
INNER JOIN subscription ON member.id_sub = subscription.id_sub
WHERE subscription.price > 42
ORDER BY user_card.last_name ASC, user_card.first_name ASC;