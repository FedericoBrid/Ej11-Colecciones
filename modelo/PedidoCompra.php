 <?php
class PedidoCompra
{
     private $fecha;
     private $proveedor;
     private $fechaEntregaEstimada;
     private $costoTotal;
     private $pedidoCerrado;
     private $listLineasCompras = array();

     public function getFecha()
     {
         return $this->fecha;
     }
     public function setFecha($f)
     {
         $this->fecha=$f;
     }

     public function getProveedor()
     {
         return $this->proveedor;
     }
     public function setProveedor($prov)
     {
         $this->proveedor=$prov;
     }

     public function getFechaEntregaEstimada()
     {
         return $this->fechaEntregaEstimada;
     }
     public function setFechaEntregaEstimada($fee)
     {
         $this->fechaEntregaEstimada=$fee;
     }

     public function getCostoTotal()
     {
         return $this->costoTotal;
     }
     public function setCostoTotal($ct)
     {
         $this->costoTotal=$ct;
     }

     public function getPedidoCerrado()
     {
         return $this->pedidoCerrado;
     }
     public function setPedidoCerrado($pc)
     {
         $this->pedidoCerrado=$pc;
     }

     public function getListLineasCompras()
     {
         return $this->listLineasCompras;
     }
     public function setLineaCompra($lc)
     {
         $this->lineaCompra[]=$lc;
     }

     public function MostrarDatos()
     {
         echo "Fecha del Pedido de Compra: " . $this.getFecha()."<br>";
         echo "Fecha de entrega Estimada del Pedido de Compra: " . $this.getFechaEntregaEstimada()."<br>";
         echo "Costo total del Pedido de Compra: " . $this.getCostoTotal()."<br>";
         echo "Pedido Cerrado?: " . $this.getPedidoCerrado()."<br>";
         foreach ($listLineasCompras as $lc) {    
         echo "Producto: " . $lc.getProducto()."<br>";
         echo "Cantidad: " . $lc.getCantidad()."<br>";
         echo "Costo unitario: " . $lc.getCostoUnitario()."<br>";
         echo "Fue Entregado?: " . $lc.getFueEntregado()."<br>";
         echo "Descripcion del Producto: " . $lc.getProducto()->getDescripcion()."<br>";
         echo "Precio de Venta del Producto: "  . $lc.getProducto()->getPrecioVenta()."<br>";    
         }
         echo "Descripcion del Proveedor: " . $this.getProveedor()->getDescripcion()."<br>";    
     }
 }