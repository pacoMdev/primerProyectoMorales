<?php
class Promocion{
    protected $promotion_id;
    protected $nameDiscount;
    protected $description;
    protected $date_ini;
    protected $date_fin;
    protected $porcentaje;
    protected $date_creation;
    protected $imageURL;
    protected $promotion_code;

    public function __contstruct(){

    }
    public function hidrate(array $data){
        $this->promotion_id = $data["promotion_id"] ?? null;
        $this->nameDiscount = $data["nameDiscount"] ?? null;
        $this->description = $data["description"] ?? null;
        $this->date_ini = $data["date_ini"] ?? null;
        $this->date_fin = $data["date_fin"] ?? null;
        $this->porcentaje = $data["porcentaje"] ?? null;
        $this->date_creation = $data["date_creation"] ?? null;
        $this->imageURL = $data["imageURL"] ?? null;
        $this->promotion_code = $data["promotion_code"] ?? null;
    }  

    /**
     * Get the value of imageURL
     */ 
    public function getImageURL()
    {
        return $this->imageURL;
    }

    /**
     * Set the value of imageURL
     *
     * @return  self
     */ 
    public function setImageURL($imageURL)
    {
        $this->imageURL = $imageURL;

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
     * Get the value of porcentaje
     */ 
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    /**
     * Set the value of porcentaje
     *
     * @return  self
     */ 
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;

        return $this;
    }

    /**
     * Get the value of date_fin
     */ 
    public function getDate_fin()
    {
        return $this->date_fin;
    }

    /**
     * Set the value of date_fin
     *
     * @return  self
     */ 
    public function setDate_fin($date_fin)
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    /**
     * Get the value of date_ini
     */ 
    public function getDate_ini()
    {
        return $this->date_ini;
    }

    /**
     * Set the value of date_ini
     *
     * @return  self
     */ 
    public function setDate_ini($date_ini)
    {
        $this->date_ini = $date_ini;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of nameDiscount
     */ 
    public function getNameDiscount()
    {
        return $this->nameDiscount;
    }

    /**
     * Set the value of nameDiscount
     *
     * @return  self
     */ 
    public function setNameDiscount($nameDiscount)
    {
        $this->nameDiscount = $nameDiscount;

        return $this;
    }

    /**
     * Get the value of promotion_id
     */ 
    public function getPromotion_id()
    {
        return $this->promotion_id;
    }

    /**
     * Set the value of promotion_id
     *
     * @return  self
     */ 
    public function setPromotion_id($promotion_id)
    {
        $this->promotion_id = $promotion_id;

        return $this;
    }

    /**
     * Get the value of promotion_code
     */ 
    public function getPromotion_code()
    {
        return $this->promotion_code;
    }

    /**
     * Set the value of promotion_code
     *
     * @return  self
     */ 
    public function setPromotion_code($promotion_code)
    {
        $this->promotion_code = $promotion_code;

        return $this;
    }
}