CREATE TABLE Medicamentos (
    id_medicamento integer PRIMARY KEY AUTOINCREMENT,
    nombre varchar (50),
    presentacion varchar (50),
    categoria varchar (50),
    fecha_caducidad varchar (50),
    sector varchar(15),
    existencias int
);