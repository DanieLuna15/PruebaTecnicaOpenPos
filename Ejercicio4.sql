-- Ejercicio 4 - SQL (Consulta Compleja)
-- Problema:
-- Dadas las siguientes tablas:
-- ----------------------------------
-- clientes
-- ----------------------------------
-- productos
-- ----------------------------------
-- ventas
-- ----------------------------------
-- Escribe una consulta SQL que devuelva el producto más comprado por cada cliente.


WITH ranking AS (
    SELECT 
        v.cliente_id, 
        c.nombre AS cliente, 
        v.producto_id, 
        p.nombre AS producto, 
        COUNT(v.producto_id) AS total_compras,
        RANK() OVER (PARTITION BY v.cliente_id ORDER BY COUNT(v.producto_id) DESC) AS rank
    FROM ventas v
    JOIN clientes c ON v.cliente_id = c.id
    JOIN productos p ON v.producto_id = p.id
    GROUP BY v.cliente_id, v.producto_id, c.nombre, p.nombre
)
SELECT cliente_id, cliente, producto_id, producto, total_compras
FROM ranking
WHERE rank = 1;