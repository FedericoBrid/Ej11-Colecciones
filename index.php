<?php
require_once "modelo/LineaCompra.php";
require_once "modelo/PedidoCompra.php";
require_once "modelo/Producto.php";
require_once "modelo/Proveedor.php";

$proveedor = new Proveedor();
$proveedor->setId(01);
$proveedor->setDescripcion("Caromar");

$producto1 = new Producto();
$producto1->setCodigo(1121);
$producto1->setDescripcion("Perfumina Poet");
$producto1->setPrecioVenta("$40");

$producto2 = new Producto();
$producto2->setCodigo(2221);
$producto2->setDescripcion("Lavandina Ayudin");
$producto2->setPrecioVenta("$58");

$lineaCompra1 = new LineaCompra();
$lineaCompra1->setProducto($producto1);
$lineaCompra1->setCantidad(3);
$lineaCompra1->setCostoUnitario("$28");
$lineaCompra1->setFueEntregado("Si");

$lineaCompra2 = new LineaCompra();
$lineaCompra2->setProducto($producto2);
$lineaCompra2->setCantidad(6);
$lineaCompra2->setCostoUnitario("$35");
$lineaCompra2->setFueEntregado("Si");

$pedidoCompra = new PedidoCompra();
$pedidoCompra->setFecha(15/10/2020);
$pedidoCompra->setProveedor($proveedor);
$pedidoCompra->setFechaEntregaEstimada("15:00 hs");
$pedidoCompra->setCostoTotal("$294");
$pedidoCompra->setPedidoCerrado("Si");
$pedidoCompra->setLineaCompra($lineaCompra1);
$pedidoCompra->setLineaCompra($lineaCompra2);

$pedidoCompra->MostrarDatos();
