<?php

class Pedido{
    protected $pedido_id;
    protected $cliente_id;
    protected $metodo_envio;
    protected $estado;
    protected $date_creation;
    protected $discount_id;
    protected $subtotal;
    protected $tax;
    protected $price_total;
    public function __contstruct(){

    }
    public function hidrate(array $data){
        $this->pedido_id = $data["pedido_id"] ?? null;
        $this->cliente_id = $data["cliente"] ?? null;
        $this->metodo_envio = $data["metodo_envio"] ?? null;
        $this->estado = $data["estado"] ?? null;
        $this->date_creation = $data["date_creation"] ?? null;
        $this->discount_id = $data["discount_id"] ?? null;
        $this->subtotal = $data["subtotal"] ?? null;
        $this->tax = $data["tax"] ?? null;
        $this->price_total = $data["price_total"] ?? null;
    }    

    /**
     * Get the value of pedido_id
     */ 
    public function getPedido_id()
    {
        return $this->pedido_id;
    }

    /**
     * Set the value of pedido_id
     *
     * @return  self
     */ 
    public function setPedido_id($pedido_id)
    {
        $this->pedido_id = $pedido_id;

        return $this;
    }

    /**
     * Get the value of cliente_id
     */ 
    public function getCliente_id()
    {
        return $this->cliente_id;
    }

    /**
     * Set the value of cliente_id
     *
     * @return  self
     */ 
    public function setCliente_id($cliente_id)
    {
        $this->cliente_id = $cliente_id;

        return $this;
    }

    /**
     * Get the value of metodo_envio
     */ 
    public function getMetodo_envio()
    {
        return $this->metodo_envio;
    }

    /**
     * Set the value of metodo_envio
     *
     * @return  self
     */ 
    public function setMetodo_envio($metodo_envio)
    {
        $this->metodo_envio = $metodo_envio;

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of date_creation
     */ 
    public function getDate_creation()
    {
        return $this->date_creation;
    }

    /**
     * Set the value of date_creation
     *
     * @return  self
     */ 
    public function setDate_creation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    /**
     * Get the value of discount_id
     */ 
    public function getDiscount_id()
    {
        return $this->discount_id;
    }

    /**
     * Set the value of discount_id
     *
     * @return  self
     */ 
    public function setDiscount_id($discount_id)
    {
        $this->discount_id = $discount_id;

        return $this;
    }

    /**
     * Get the value of subtotal
     */ 
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Set the value of subtotal
     *
     * @return  self
     */ 
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * Get the value of tax
     */ 
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set the value of tax
     *
     * @return  self
     */ 
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Get the value of price_total
     */ 
    public function getPrice_total()
    {
        return $this->price_total;
    }

    /**
     * Set the value of price_total
     *
     * @return  self
     */ 
    public function setPrice_total($price_total)
    {
        $this->price_total = $price_total;

        return $this;
    }
}