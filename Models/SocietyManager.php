<?php


namespace CESI\ConnectLife;


class SocietyManager extends Manager
{
    public function CreateSociety($societyName){
        $lastID=$this->db->query("SELECT idSociete from societe ORDER BY idSociete DESC LIMIT 1");
        $lastID=$lastID->fetch()["idSociete"]+1;
        $insertion = $this->db->prepare('INSERT INTO societe VALUES (:idSociete,:societyName)');
        $check=$insertion->execute(array(":societyName"=>$societyName, ":idSociete"=>$lastID));
        return $lastID;
    }
}

