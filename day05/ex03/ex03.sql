INSERT INTO ft_table(`login`, `creation_date`, `group`)
SELECT last_name, birthdate, 3
FROM `user_card`
WHERE `user_card`.`last_name` LIKE '%a%' AND length(last_name) < 9
ORDER BY last_name LIMIT 10;