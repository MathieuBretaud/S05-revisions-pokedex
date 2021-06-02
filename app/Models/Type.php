<?php


class Type
{

    private $id;
    private $name;
    private $color;


    public function find($id)
    {
        // requête pour récupérer UNE marque
        $sql = '
            SELECT *
            FROM type
            WHERE id = ' . $id;

        // Database::getPDO() me retourne l'objet PDO représentant la connexion à la BDD
        $pdo = Database::getPDO();

        // j'execute ma requête pour récupérer le type
        $pdoStatement = $pdo->query($sql);

        // Je veux récupérer un objet Type, PDO le fait pour moi => fetchObject (au lieu de fetch)
        $result = $pdoStatement->fetchObject('Type');

        return $result;
    }

    public function findAllTypePokemon($id)  
    {
        $sql = '
        SELECT *
        FROM pokemon
        WHERE numero = ' . $id;

        // On récupère la connexion à PDO
        $pdo = Database::getPDO();

        // On exécute la requête
        $pdoStatement = $pdo->query($sql);

        // On récupère un tableau d'objets de type character
        $pokemon = $pdoStatement->fetchObject( 'Pokemon');

        // On le renvoie
        return $pokemon;
    }
    
    public function findType(int $id)
    {
        $sql = "SELECT pokemon_type.*, pokemon.nom AS pokemon_nom, type.name AS type_name
        FROM pokemon_type
        INNER JOIN pokemon ON pokemon_type.pokemon_numero = pokemon.numero
        LEFT JOIN type ON pokemon_type.type_id = type.id
        WHERE pokemon.numero = {$id}";


        // On récupère la connexion à PDO
        $pdo = Database::getPDO();

        // On exécute la requête
        $pdoStatement = $pdo->query($sql);

        // On récupère un tableau d'objets de type character
        $pokemon = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Pokemon');

        // On le renvoie
        return $pokemon;

    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

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