<?php


namespace CESI\ConnectLife;


class CustomerManager extends Manager
{
    public function getCustomer($GUID){
        $customer = $this->db->prepare('SELECT GUID,nom,email,estSociete FROM clients WHERE GUIDClient = :GUID');
        $customer->execute(['GUID' => $GUID]);
        return $customer->fetch();
    }

    public function updateProfessional($GUID){
        $update = $this->db->prepare('UPDATE clients SET civilite = :civilite,nom = :nom, prenom = :prenom, fonctionDansLaSociete = :fonction, telephone1 = :tel1, telephone2 = :tel2, email = :email, adresse1 = :adresse1, adresse2 = :adresse2');
    }

    public function updateParticular($GUID){
        $update = $this->db->prepare('UPDATE clients SET civilite = :civilite,nom = :nom, prenom = :prenom, telephone1 = :tel1, telephone2 = :tel2, email = :email, adresse1 = :adresse1, adresse2 = :adresse2');
    }
}