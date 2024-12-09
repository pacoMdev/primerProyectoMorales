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
    protected $name;
    protected $surname;
    protected $address;
    protected $cod_postal;
    protected $city;
    protected $phone;
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
        $this->name = $data["name"] ?? null;
        $this->surname = $data["surname"] ?? null;
        $this->address = $data["address"] ?? null;
        $this->cod_postal = $data["cod_postal"] ?? null;
        $this->city = $data["city"] ?? null;
        $this->phone = $data["phone"] ?? null;
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
    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }
    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
    /**
     * Get the value of cod_postal
     */ 
    public function getCod_postal()
    {
        return $this->cod_postal;
    }

    /**
     * Set the value of cod_postal
     *
     * @return  self
     */ 
    public function setCod_postal($cod_postal)
    {
        $this->cod_postal = $cod_postal;

        return $this;
    }
    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }
    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }
}