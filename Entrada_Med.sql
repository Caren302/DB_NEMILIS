CREATE TABLE Entrada_Medicamentos (
    id_detalle integer PRiMARY KEY AUTOINCREMENT,
    fecha_entrada date,
    id_medicamento integer REFERENCES Medicamentos(Id_medicamento),
    cantidad int,
    fecha_caducidad date
);