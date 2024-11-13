<?php

class Producto{
    protected $product_id;
    protected $name_product;
    protected $description;
    protected $image_url;
    protected $price_product;
    protected $category_id;
    protected $date_creation_product;

    public function __construct($product_id, $name_product, $description, $image_url, $price_product, $date_creation_product, $category_id)
    {
        $this->$product_id = $product_id;
        $this->$name_product = $name_product;
        $this->$description = $description;
        $this->$image_url = $image_url;
        $this->$price_product = $price_product;
        $this->$category_id = $category_id;
        $this->$date_creation_product = $date_creation_product;
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
     * Get the value of name_product
     */ 
    public function getName_product()
    {
        return $this->name_product;
    }

    /**
     * Set the value of name_product
     *
     * @return  self
     */ 
    public function setName_product($name_product)
    {
        $this->name_product = $name_product;

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
    public function getImage_url()
    {
        return $this->image_url;
    }

    /**
     * Set the value of image_url
     *
     * @return  self
     */ 
    public function setImage_url($image_url)
    {
        $this->image_url = $image_url;

        return $this;
    }

    /**
     * Get the value of price_product
     */ 
    public function getPrice_product()
    {
        return $this->price_product;
    }

    /**
     * Set the value of price_product
     *
     * @return  self
     */ 
    public function setPrice_product($price_product)
    {
        $this->price_product = $price_product;

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
    public function getDate_creation_product()
    {
        return $this->date_creation_product;
    }

    /**
     * Set the value of date_creation_product
     *
     * @return  self
     */ 
    public function setDate_creation_product($date_creation_product)
    {
        $this->date_creation_product = $date_creation_product;

        return $this;
    }
}