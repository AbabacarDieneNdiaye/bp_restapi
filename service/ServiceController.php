<?php

class ServiceController
{

    public function getSolde($numCompte)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        require_once 'bootstrap.php';

        $solde = $entityManager
                ->createQuery("SELECT c.solde FROM Compte c 
                                WHERE c.numCompte = ".$numCompte)
                ->getResult();
       echo json_encode($solde);
       
    }

    public function getOperations($numCompte)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        require_once 'bootstrap.php';

        $operations = $entityManager
                            ->createQuery("SELECT o.id, o.date_operation, 
                                                  o.montant, ty.libelle  
                                            FROM Compte c, Operation o, Typeoperation ty 
                                            WHERE c.num_compte = ".$num_compte." and o.compte_id = c.id GROUP BY o.id")
                            ->getResult();
        echo json_encode($operations);
                               
    }
}

?>