<?php

class Producto{
    protected $product_id;
    protected $name;
    protected $description;
    protected $imageURL;
    protected $price;
    protected $category_id;
    protected $date_creation;
    public function __contstruct(){

    }
    public function hidrate(array $data){
        $this->product_id = $data["product_id"] ?? null;
        $this->name = $data["name"] ?? null;
        $this->description = $data["description"] ?? null;
        $this->imageURL = $data["imageURL"] ?? null;
        $this->price = $data["price"] ?? null;
        $this->category_id = $data["category_id"] ?? null;
        $this->date_creation = $data["date_creation"] ?? null;
    }    


    /**
     * Get the value of product_id
     */ 
    public function getProduct_id()
    {
        return $this->product_id;
    }

    /**
     * Set the value of product_id
     *
     * @return  self
     */ 
    public function setProduct_id($product_id)
    {
        $this->product_id = $product_id;

        return $this;
    }

    /**
     * Get the value of$name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of$name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->$name = $name;

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
     * Get the value of image_url
     */ 
    public function getImageURL()
    {
        return $this->imageURL;
    }

    /**
     * Set the value of image_url
     *
     * @return  self
     */ 
    public function setImageURL($imageURL)
    {
        $this->imageURL = $imageURL;

        return $this;
    }

    /**
     * Get the value of price_product
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price_product
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of category_id
     */ 
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */ 
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }

    /**
     * Get the value of date_creation_product
     */ 
    public function getDate_creation()
    {
        return $this->date_creation;
    }

    /**
     * Set the value of date_creation_product
     *
     * @return  self
     */ 
    public function setDate_creation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }
}