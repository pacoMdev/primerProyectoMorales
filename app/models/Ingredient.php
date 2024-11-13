<?php

class Ingredient extends Producto{
    
    protected $ingredient_id;
    protected $name_ingredient;
    protected $price_ingredient;


    public function __construct($name_ingredient, $price_ingredient, $ingredient_id, $product_id, $name_product, $description, $image_url, $price_product, $category_id, $date_creation_product)
    {
        parent::__construct($product_id, $name_product, $description, $image_url, $price_product, $category_id, $date_creation_product);
        $this->name_ingredient = $name_ingredient;
        $this->price_ingredient = $price_ingredient;
        $this->ingredient_id = $ingredient_id;
    }



    /**
     * Get the value of price_ingredient
     */ 
    public function getPrice_ingredient()
    {
        return $this->price_ingredient;
    }

    /**
     * Set the value of price_ingredient
     *
     * @return  self
     */ 
    public function setPrice_ingredient($price_ingredient)
    {
        $this->price_ingredient = $price_ingredient;

        return $this;
    }

    /**
     * Get the value of name_ingredient
     */ 
    public function getName_ingredient()
    {
        return $this->name_ingredient;
    }

    /**
     * Set the value of name_ingredient
     *
     * @return  self
     */ 
    public function setName_ingredient($name_ingredient)
    {
        $this->name_ingredient = $name_ingredient;

        return $this;
    }

    /**
     * Get the value of ingredient_id
     */ 
    public function getIngredient_id()
    {
        return $this->ingredient_id;
    }

    /**
     * Set the value of ingredient_id
     *
     * @return  self
     */ 
    public function setIngredient_id($ingredient_id)
    {
        $this->ingredient_id = $ingredient_id;

        return $this;
    }
}