SELECT us.user_id, us.user_name "Name", us.user_city City, us.user_country Country, date_format(ors.order_date, "%d/%m/%Y") "Date", ors.order_total Total
FROM user us
LEFT JOIN orders ors ON us.user_id = ors.order_user_id
WHERE us.user_id IN (1,3, 5)
ORDER BY us.user_name