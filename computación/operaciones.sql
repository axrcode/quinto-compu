/* CRUD */
/* CREATE - READ - UPDATE - DELETE */
/* CREAR - LEER - ACTUALIZAR - ELIMINAR */

INSERT INTO users(nombre, apellido, puesto, area)
VALUES 
('Yakelin', 'Ixcal', 'Estudiante', 'CBP'),
('Ottoniel', 'Noriega', 'Estudiante', 'CBP'),
('Ethan', 'Ruiz', 'Estudiante', 'CBP'),
('Gabriel', 'Chaclan', 'Estudiante', 'CBP'),
('Otto', 'Taracena', 'Estudiante', 'CBP');

UPDATE users
SET 
nombre = 'Ethan Eduardo',
apellido = 'Ruiz Estrada'
WHERE 
id = 4,
area = 'CBP';

DELETE users 
WHERE id = 2;

/* 
NOTA: El UPDATE y el DELETE siempre debe 
llevar una condicion (WHERE) de lo contrario 
se borraran o actualizaran todos los registros 
*/