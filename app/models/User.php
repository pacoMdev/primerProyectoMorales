<?php

class User{
    protected $user_id;

    protected $email;

    protected $apple_id;

    protected $password;

    protected $phone;

    protected $direccion;

    protected $poblacion;

    protected $ciudad;

    protected $date_modification;

    protected $date_creation;

    protected $name;

    protected $surname;

    public function __construct($user_id, $email, $apple_id, $password, $phone, $direccion, $poblacion, $ciudad, $date_modification, $date_creation, $name, $surname)
    {
        $this->user_id = $user_id;
        $this->email = $email;
        $this->apple_id = $apple_id;
        $this->password = $password;
        $this->phone = $phone;
        $this->direccion = $direccion;
        $this->poblacion = $poblacion;
        $this->ciudad = $ciudad;
        $this->date_modification = $date_modification;
        $this->date_creation = $date_creation;
        $this->name = $name;
        $this->surname = $surname;
    }

    /**
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of apple_id
     */ 
    public function getApple_id()
    {
        return $this->apple_id;
    }

    /**
     * Set the value of apple_id
     *
     * @return  self
     */ 
    public function setApple_id($apple_id)
    {
        $this->apple_id = $apple_id;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

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

    /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of poblacion
     */ 
    public function getPoblacion()
    {
        return $this->poblacion;
    }

    /**
     * Set the value of poblacion
     *
     * @return  self
     */ 
    public function setPoblacion($poblacion)
    {
        $this->poblacion = $poblacion;

        return $this;
    }

    /**
     * Get the value of ciudad
     */ 
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set the value of ciudad
     *
     * @return  self
     */ 
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get the value of date_modification
     */ 
    public function getDate_modification()
    {
        return $this->date_modification;
    }

    /**
     * Set the value of date_modification
     *
     * @return  self
     */ 
    public function setDate_modification($date_modification)
    {
        $this->date_modification = $date_modification;

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
}