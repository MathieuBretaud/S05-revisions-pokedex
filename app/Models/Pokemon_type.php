<?php

class Pokemon_type 
{

    private $id;
    private $pokemon_numero;
    private $type_id;
    public $type_color;
    public function findType(int $id)
    {
        $sql = "SELECT pokemon_type.*, pokemon.nom AS pokemon_nom, type.name AS type_name,type.color AS type_color
        FROM pokemon_type
        INNER JOIN pokemon ON pokemon_type.pokemon_numero = pokemon.numero
        LEFT JOIN type ON pokemon_type.type_id = type.id
        WHERE pokemon.numero = {$id}";


        // On récupère la connexion à PDO
        $pdo = Database::getPDO();

        // On exécute la requête
        $pdoStatement = $pdo->query($sql);

        // On récupère un tableau d'objets de type character
        $pokemon = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Pokemon_type');

        // On le renvoie
        return $pokemon;

    }

    /**
     * Get the value of type_id
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @return  self
     */ 
    public function setType_id($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    /**
     * Get the value of pokemon_numero
     */ 
    public function getPokemon_numero()
    {
        return $this->pokemon_numero;
    }

    /**
     * Set the value of pokemon_numero
     *
     * @return  self
     */ 
    public function setPokemon_numero($pokemon_numero)
    {
        $this->pokemon_numero = $pokemon_numero;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}