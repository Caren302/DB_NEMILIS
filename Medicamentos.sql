CREATE TABLE Medicamentos (
    id_medicamento integer PRIMARY KEY AUTOINCREMENT,
    nombre varchar (50),
    presentacion varchar (50),
    categoria varchar (50),
    existencias int,
    sector varchar(15)
);