CREATE TABLE Material_curacion (
    id_material integer PRIMARY KEY AUTOINCREMENT,
    nombre varchar (50),
    presentacion varchar (50),
    categoria varchar (50),
    existencias int,
    sector varchar(15)
);