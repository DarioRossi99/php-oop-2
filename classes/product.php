<?php
class Prodotto {
    protected string $nome;
    protected  float $prezzo;
    protected string $categoria;
    
    function __construct($_nome, $_prezzo, $_categoria)
    {
        $this->setNome($_nome);
        $this->setPrezzo($_prezzo);
        $this->setCategoria($_categoria);
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of prezzo
     */ 
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    /**
     * Set the value of prezzo
     *
     * @return  self
     */ 
    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}

class Cibo extends Prodotto{
    private string $tipo;
    private bool $perSterilizzati;

    function __construct($_tipo, $_perSterilizzati, $_nome, $_prezzo, $_categoria)  
    {
        parent::__construct($_nome, $_prezzo, $_categoria);
        $this->setTipo($_tipo);
        $this->setPerSterilizzati($_perSterilizzati);
    }

    /**
     * Get the value of perSterilizzati
     */ 
    public function getPerSterilizzati()
    {
        return $this->perSterilizzati;
    }

    /**
     * Set the value of perSterilizzati
     *
     * @return  self
     */ 
    public function setPerSterilizzati($perSterilizzati)
    {
        $this->perSterilizzati = $perSterilizzati;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }
}

class Giochi extends Prodotto{
    private string $materiale;

    function __construct($_materiale, $_nome, $_prezzo, $_categoria)  
    {
        parent::__construct($_nome, $_prezzo, $_categoria);
        $this->setMateriale($_materiale);
    }
    /**
     * Get the value of materiale
     */ 
    public function getMateriale()
    {
        return $this->materiale;
    }

    /**
     * Set the value of materiale
     *
     * @return  self
     */ 
    public function setMateriale($materiale)
    {
        $this->materiale = $materiale;

        return $this;
    }
}

class Cucce extends Prodotto{
    private string $materiale;
    private string $dimensioni;

    function __construct($_materiale, $_dimensioni, $_nome, $_prezzo, $_categoria)  
    {
        parent::__construct($_nome, $_prezzo, $_categoria);
        $this->setMateriale($_materiale);
        $this->setDimensioni($_dimensioni);
    }
    /**
     * Get the value of dimensioni
     */ 
    public function getDimensioni()
    {
        return $this->dimensioni;
    }

    /**
     * Set the value of dimensioni
     *
     * @return  self
     */ 
    public function setDimensioni($dimensioni)
    {
        $this->dimensioni = $dimensioni;

        return $this;
    }

    /**
     * Get the value of materiale
     */ 
    public function getMateriale()
    {
        return $this->materiale;
    }

    /**
     * Set the value of materiale
     *
     * @return  self
     */ 
    public function setMateriale($materiale)
    {
        $this->materiale = $materiale;

        return $this;
    }
}
?>