<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="compte")
 */
class Compte
{
        /** 
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue
         */
        private $id;
        /** 
         * @ORM\Column(type="string") 
         */
        private $numCompte;

        /** 
         * @ORM\Column(type="decimal") 
         */
        private $solde;

        /** 
         * @ORM\Column(type="string") 
         */
       
        private $cleRib;
        /** 
         * @ORM\Column(type="decimal") 
         */
        private $fraisOuverture;
        /** 
         * @ORM\Column(type="decimal") 
         */
        private $agios;
        /** 
         * @ORM\Column(type="string") 
         */
        private $dateOuverture;
        /** 
         * @ORM\Column(type="string") 
         */
        private $dateFermuture;

        /**
         * Many compte have one client. This is the owning side.
         * @ORM\ManyToOne(targetEntity="Client", inversedBy="comptes")
         * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
         */
        private $client_id;

        private $operations;

         

        public function __construct()
        {
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
                return $this->id = $id;
        }

        /**
         * Get the value of numCompte
         */
        public function getNumCompte()
        {
                return $this->numCompte;
        }

        /**
         * Set the value of numCompte
         *
         * @return  self
         */
        public function setNumCompte($numCompte)
        {
            return $this->numcompte = $numCompte;

        }

        
        /**
         * Get the value of cleRib
         */
        public function getCleRib()
        {
                return $this->cleRib;
        }

        /**
         * Set the value of cleRib
         *
         * @return  self
         */
        public function setCleRib($cleRib)
        {
                return $this->cleRib = $cleRib;
        }

        /**
         * Get the value of fraisOuverture
         */
        public function getFraisOuverture()
        {
                return $this->fraisOuverture;
        }

        /**
         * Set the value of fraisOuverture
         *
         * @return  self
         */
        public function setFraisOuverture($fraisOuverture)
        {
                return $this->fraisOuverture = $fraisOuverture;
        }

        /**
         * Get the value of agios
         */
        public function getAgio()
        {
                return $this->agios;
        }

        /**
         * Set the value of agios
         *
         * @return  self
         */
        public function setAgio($agios)
        {
                return $this->agios = $agios;
        }

        /**
         * Get the value of dateOuverture
         */
        public function getDateOuverture()
        {
                return $this->dateOuverture;
        }

        /**
         * Set the value of dateOuverture
         *
         * @return  self
         */
        public function setDateOuverture($dateOuverture)
        {
                return $this->dateOuverture = $dateOuverture;
        }

        /**
         * Get the value of date_fermuture
         */
        public function getDateFermuture()
        {
                return $this->dateFermuture;
        }

        /**
         * Set the value of date_fermuture
         *
         * @return  self
         */
        public function setDateFermuture($dateFermuture)
        {
                return $this->dateFermuture = $dateFermuture;
        }

        
        /**
         * Get the value of client_id
         */
        public function getClient_id()
        {
                return $this->client_id;
        }

        /**
         * Set the value of client_id
         *
         * @return  self
         */
        public function setClient_id($client_id)
        {
                $this->client_id = $client_id;

                return $this;
        }

        /**
         * Get one compte has many operations. This is the inverse side.
         */ 
        public function getOperations()
        {
                return $this->operations;
        }

        /**
         * Set one compte has many operations. This is the inverse side.
         *
         * @return  self
         */ 
        public function setOperations($operations)
        {
                $this->operations = $operations;

                return $this;
        }

        /**
         * Get the value of solde
         */ 
        public function getSolde()
        {
                return $this->solde;
        }

        /**
         * Set the value of solde
         *
         * @return  self
         */ 
        public function setSolde($solde)
        {
                $this->solde = $solde;

                return $this;
        }
}