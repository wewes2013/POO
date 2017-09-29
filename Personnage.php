<?php

class Personnage {

    private $_id;
    private $_nom;
    private $_forcePerso;
    private $_degats;
    private $_niveau;
    private $_experience;

    public function __construct(array $tab){
        $this->setId($tab['id']);
        $this->setNom($tab['nom']);
    }
    
    //Les getters
    public function id() {
        return $this->_id;
    }

    public function nom() {
        return $this->_nom;
    }

    public function forcePerso() {
        return $this->_forcePerso;
    }

    public function degats() {
        return $this->_degats;
    }

    public function niveau() {
        return $this->_niveau;
    }

    public function experience() {
        return $this->_experience;
    }

    //Les setters
    public function setId($id) {
        // On convertit l'argument en nombre entier.
        // Si c'en �tait d�j� un, rien ne changera.
        // Sinon, la conversion donnera le nombre 0 (� quelques exceptions pr�s, mais rien d'important ici).
        $id = (int) $id;

        // On v�rifie ensuite si ce nombre est bien strictement positif.
        if ($id > 0) {
            // Si c'est le cas, c'est tout bon, on assigne la valeur � l'attribut correspondant.
            $this->_id = $id;
        }
    }

    public function setNom($nom) {
        if (is_string($nom)) {
            $this->_nom = $nom;
        }
    }

    public function setForcePerso($forcePerso) {
        $forcePerso = (int) $forcePerso;

        if ($forcePerso >= 1 && $forcePerso <= 100) {
            $this->_forcePerso = $forcePerso;
        }
    }

    public function setDegats($degats) {
        $degats = (int) $degats;

        if ($degats >= 0 && $degats <= 100) {
            $this->_degats = $degats;
        }
    }

    public function setNiveau($niveau) {
        $niveau = (int) $niveau;

        if ($niveau >= 1 && $niveau <= 100) {
            $this->_niveau = $niveau;
        }
    }

    public function setExperience($experience) {
        $experience = (int) $experience;

        if ($experience >= 1 && $experience <= 100) {
            $this->_experience = $experience;
        }
    }

}

?>