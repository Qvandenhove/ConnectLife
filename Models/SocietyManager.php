<?php


namespace CESI\ConnectLife;


class SocietyManager extends Manager
{
    public function CreateSociety(){
        $insertion = $this->db->prepare('INSERT INTO societe VALUES (idSociete,:societyName)');
    }
}