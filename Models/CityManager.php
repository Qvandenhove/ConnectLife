<?php


namespace CESI\ConnectLife;


class CityManager extends Manager
{

    public function getCities($codePostal){
        $villes = $this->db->prepare('SELECT Nom_Commune FROM villes WHERE Code_Postal = :codePostal');
        $villes->execute([':codePostal' => $codePostal]);
        $listeVilles = [];
        $count = 0;
        while($ville = $villes->fetch()){
            array_pop($ville);
            $listeVilles['ville'.strval($count)] = $ville['Nom_Commune'];
            $count++;
        }
        return $listeVilles;
    }
}