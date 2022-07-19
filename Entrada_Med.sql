CREATE TABLE entrada_medicamentos (
    id_detalle integer PRiMARY KEY AUTOINCREMENT,
    fecha_entrada date,
    id_medicamento integer REFERENCES medicamentos(id_medicamento),
    cantidad int,
    fecha_caducidad date
);