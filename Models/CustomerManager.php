<?php


namespace CESI\ConnectLife;


class CustomerManager extends Manager
{
    public function getCustomer($GUID){
        $customer = $this->db->prepare('SELECT * FROM clients WHERE GUIDClient = :GUID');
        $customer->execute(['GUID' => $GUID]);
        return $customer->fetch(\PDO::FETCH_ASSOC);
    }

    public function updateProfessional($GUID, $idSociete){
        $request = $this->db->prepare("UPDATE clients set clients.idSociete=:idSociete, clients.civilite=:civilite, clients.nom=:nom, clients.prenom=:prenom, clients.fonctionDansLaSociete=:fonctionDansLaSociete, clients.adresse1=:adresse1, clients.adresse2=:adresse2,
                                        clients.code_postal=:code_postal, clients.ville=:ville, clients.telephone1=:telephone1, clients.telephone2=:telephone2, update_clients = 1, statut_xml='non reçu' WHERE GUIDClient=:GUID");
        $request->execute([
            ":GUID"=> $GUID,
            ":idSociete"=> $idSociete,
            ":civilite" => $_POST["civilite"],
            ":nom" => $_POST["nom"],
            ":prenom" => $_POST["prenom"],
            ":fonctionDansLaSociete" => $_POST["posteOccupe"],
            ":adresse1" => $_POST["adresse1"],
            ":adresse2" => $_POST["adresse2"],
            ":code_postal" => $_POST["codePostal"],
            ":ville" => $_POST["ville"],
            ":telephone1" => $_POST["telephone1"],
            ":telephone2" => $_POST["telephone2"],
        ]);
    }

    public function updateParticular($GUID){
        $request = $this->db->prepare("UPDATE clients set clients.civilite= :civilite, clients.nom=:nom, clients.prenom=:prenom, clients.adresse1=:adresse1, clients.adresse2=:adresse2,
                                        clients.code_postal=:code_postal, clients.ville=:ville, clients.telephone1=:telephone1, clients.telephone2=:telephone2, update_clients = 1, statut_xml='non reçu' WHERE GUIDClient=:GUID");

        $request->execute([
            ":GUID"=> $GUID,
            ":civilite" => $_POST['civilite'],
            ":nom" => $_POST["nom"],
            ":prenom" => $_POST["prenom"],
            ":adresse1" => $_POST["adresse1"],
            ":adresse2" => $_POST["adresse2"],
            ":code_postal" => $_POST["codePostal"],
            ":ville" => $_POST["ville"],
            ":telephone1" => $_POST["telephone1"],
            ":telephone2" => $_POST["telephone2"],
        ]);

    }

    public function getCustomersForXML(){
        $req_customer = $this->db->query("SELECT * FROM Clients WHERE statut_XML = 'non reçu' AND update_clients = 1");
        $customer_saved = $this->db->exec("UPDATE clients SET statut_XML = 'reçu' WHERE update_clients = 1");
        return $req_customer;
    }

}


