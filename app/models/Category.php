<?php
class Category{
    protected $category_id;
    protected $nameCategory;
    protected $date_creation;

    function __construct($category_id, $nameCategory, $date_creation){
        $this->category_id=$category_id;
        $this->nameCategory=$nameCategory;
        $this->date_creation=$date_creation;
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
     * Get the value of nameCategory
     */ 
    public function getNameCategory()
    {
        return $this->nameCategory;
    }

    /**
     * Set the value of nameCategory
     *
     * @return  self
     */ 
    public function setNameCategory($nameCategory)
    {
        $this->nameCategory = $nameCategory;

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
}