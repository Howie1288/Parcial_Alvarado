<?php
require 'Conexion.php';

class Insumos extends Conexion{
    public $insumos_id;
    public $insumos_nombre;
    public $insumos_cantidad_existencia;
    public $insumos_marca_producto;
    public $insumos_nombre_proveedor;
    public $insumos_precio;
    
    public function __construct($args = [] )
    {
        $this->insumos_id = $args['insumos_id'] ?? null;
        $this->insumos_nombre = $args['insumos_nombre'] ?? '';
        $this->insumos_cantidad_existencia = $args['insumos_cantidad_existencia'] ?? '';
        $this->insumos_marca_producto = $args['insumos_marca_producto'] ?? '';
        $this->insumos_nombre_proveedor = $args['insumos_nombre_proveedor'] ?? '';
        $this->insumos_precio = $args['insumos_precio'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO Insumos (insumos_nombre, insumos_cantidad_existencia, insumos_marca_producto, insumos_nombre_proveedor, insumos_precio ) values('$this->insumos_nombre','$this->insumos_cantidad_existencia', '$this->insumos_marca_producto', '$this->insumos_nombre_proveedor', '$this->insumos_precio')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
