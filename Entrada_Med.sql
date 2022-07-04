CREATE DATABASE Entrada_Medicamentos (
    Id_detalle integer PRiMARY KEY AUTOINCREMENT,
    Fecha_entrada date,
    Id_medicamento int,
    Cantidad int,
    Fecha_caducidad date
);