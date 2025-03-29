-- -- Ejercicio 4 - SQL (Consulta Compleja)
-- -- Problema:
-- -- Dadas las siguientes tablas:
-- ----------------------------------
-- empleados
-- ----------------------------------
-- departamentos
-- ----------------------------------
-- salarios
-- ----------------------------------
-- Consulta requerida: Escribe una consulta SQL para obtener el nombre del empleado, 
-- su departamento y la diferencia entre su salario y el salario promedio de su departamento.


SELECT 
    emp.nombre AS empleado,
    dept.nombre AS departamento,
    s.salario - dep.avg_salario AS diferencia_salario
FROM empleados emp
JOIN departamentos dept ON emp.departamento_id = dept.id
JOIN salarios s ON emp.id = s.empleado_id
JOIN (
    SELECT 
        departamento_id,
        AVG(salario) AS avg_salario
    FROM empleados e
    JOIN salarios s ON empid = s.empleado_id
    GROUP BY departamento_id
) AS dep ON empdepartamento_id = dep.departamento_id;