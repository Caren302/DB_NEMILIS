CREATE DATABASE Medicamentos (
    Id_Medicamento integer PRiMARY KEY AUTOINCREMENT,
    NombreMed varchar (50),
    EmpaqueMed varchar (20),
    CantidadMed int,
    PresentaciMed varchar (15),
    FechaVencimientoMed Date,
    ViaAdministracionMed varchar(15),
    Almacenemiento varchar(25),
    EspecificacionMed varchar(100)
);