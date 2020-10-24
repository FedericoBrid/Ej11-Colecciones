<?php
class LineaCompra{
    private $producto;
    private $cantidad;
    private $costoUnitario;
    private $fueEntregado;

    public function getProducto()
    {
        return $this->producto;
    }
    public function setProducto($p)
    {
        $this->producto=$p;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }
    public function setCantidad($c)
    {
        $this->cantidad=$c;
    }

    public function getCostoUnitario()
    {
        return $this->costoUnitario;
    }
    public function setCostoUnitario($cu)
    {
        $this->costoUnitario=$cu;
    }

    public function getFueEntregado()
    {
        return $this->fueEntregado;
    }
    public function setFueEntregado($fe)
    {
        $this->fueEntregado=$fe;
    }
    
}