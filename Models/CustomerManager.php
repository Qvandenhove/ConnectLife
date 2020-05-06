<?php


namespace CESI\ConnectLife;


class CustomerManager extends Manager
{
    public function getCustomer($GUID){
        $customer = $this->db->prepare('SELECT * FROM clients WHERE GUIDClient = :GUID');
        $customer->execute(['GUID' => $GUID]);
        return $customer->fetch();
    }
}