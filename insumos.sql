create table insumos(
    insumos_id serial not null,
    insumos_nombre varchar(50) not null,
    insumos_cantidad_existencia varchar(50) not null,
    insumos_marca_producto varchar(50)  not null,
    insumos_nombre_proveedor varchar(50) not null,
    insumos_precio int not null,
    primary key (insumos_id)
)
