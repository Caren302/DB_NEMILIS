insert into Medicamentos (id_medicamento,nombre,presentacion,categoria,cantidad,sector)
values
(01,'Paracetamol','500mg',20,'I'),
(02,'Naproxeno','550mg',20,'I'),
(03,'Diclofenaco','150mg',20,'I'),(04,'Keterolaco','10mg',20,'I'),
(05,'Tramadol','50mg',20,'I'),
(06,'Metformina','850mg',20,'I'),
(07,'Ampicilina','500mg',20,'I'),
(08,'Clindamicina','600mg',20,'I'),
(09,'Ibuprofeno','400mg',20,'I'),
(10,'Dicloxacilina','500mg',50,'III'); 

insert into Entrada_medicamentos (id_detalle,fecha_entrada,id_medicamento,cantidad,fecha_caducidad)
values
(01,'2022/07/04',01,10,'2022/09/04'),
(02,'2022/07/04',02,20,'2022/08/04'),
(03,'2022/07/19',02,5,'2022/10/04');