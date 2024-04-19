<?php
abstract class Personne {
    protected $nom;
    protected $prenom;
    protected $adresse;

    public function __construct($nom, $prenom, $adresse) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
    }

    // Les méthodes abstraites peuvent être déclarées ici si nécessaire.
    // Par exemple:
    // abstract public function afficherIdentite();
}

class Gestionnaire extends Personne {
    public function visualiserColis(Colis $colis) {
        // Logique pour visualiser un colis
    }

    public function visualiserHistorique() {
        // Logique pour visualiser l'historique des colis
    }

    public function terminerLivraison(Colis $colis) {
        // Logique pour terminer la livraison d'un colis
    }
}

class Destinataire extends Personne {
    // Si des méthodes spécifiques sont nécessaires, elles seront ajoutées ici.
}

class Expéditeur extends Personne {
    public function creerColis($long, $larg, $poids) {
        // Logique pour créer un colis
        return new Colis($long, $larg, $poids);
    }

    public function envoyerColis(Colis $colis) {
        // Logique pour envoyer un colis
    }
}

class Transporteur extends Personne {
    public $estDisponible;

    public function __construct($nom, $prenom, $adresse, $estDisponible) {
        parent::__construct($nom, $prenom, $adresse);
        $this->estDisponible = $estDisponible;
    }

    public function livrerColis(Colis $colis) {
        // Logique pour livrer un colis
    }

    public function testerDisponibilite() {
        // Logique pour tester la disponibilité
    }

    public function scanner(Colis $colis) {
        // Logique pour scanner un colis
    }

    public function planifierLivraison(Colis $colis) {
        // Logique pour planifier une livraison
    }
}

class Colis {
    public $longueur;
    public $largeur;
    public $poids;
    public $etat;

    public function __construct($longueur, $largeur, $poids) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->poids = $poids;
        $this->etat = "En attente";
    }

    public function Colis() {
        // Initialisation spécifique si nécessaire
    }

    public function envoyer() {
        // Logique pour envoyer le colis
    }

    public function recevoir() {
        // Logique pour recevoir le colis
    }

    public function scanner() {
        // Logique pour scanner le colis
    }
}
