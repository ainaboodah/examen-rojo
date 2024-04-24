<?php
class User {
    // Properties
    private $id;        // number
    private $nom;       // string
    private $prenom;    // string
    private $genre;     // string
    private $pseudo;    // string
    private $password;  // string

    // Constructor
    public function __construct(){
    }
    public function init($id, $nom, $prenom, $genre, $pseudo, $password) {
        $this->setId($id);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setGenre($genre);
        $this->setPseudo($pseudo);
        $this->setPassword($password);
    }


    // Getters
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function getPseudo() {
        return $this->pseudo;
    }

    public function getPassword() {
        return $this->password;
    }

    // Setters
    public function setId($id) {
        if (is_numeric($id)) {
            $this->id = $id;
        } else {
            throw new InvalidArgumentException('ID must be a number');
        }
    }

    public function setNom($nom) {
        if (is_string($nom)) {
            $this->nom = $nom;
        } else {
            throw new InvalidArgumentException('Nom must be a string');
        }
    }

    public function setPrenom($prenom) {
        if (is_string($prenom)) {
            $this->prenom = $prenom;
        } else {
            throw new InvalidArgumentException('Prenom must be a string');
        }
    }

    public function setGenre($genre) {
        if (is_string($genre)) {
            $this->genre = $genre;
        } else {
            throw new InvalidArgumentException('Genre must be a string');
        }
    }

    public function setPseudo($pseudo) {
        if (is_string($pseudo)) {
            $this->pseudo = $pseudo;
        } else {
            throw new InvalidArgumentException('Pseudo must be a string');
        }
    }

    public function setPassword($password) {
        if (is_string($password)) {
            $this->password = $password;
        } else {
            throw new InvalidArgumentException('Password must be a string');
        }
    }
}
?>
