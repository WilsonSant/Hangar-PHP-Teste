SELECT SUM(ors.order_total) Total, DATE_FORMAT(ors.order_date, "%m/%Y") Date
FROM orders ors
JOIN user urs ON ors.order_user_id = urs.user_id
GROUP BY Date;