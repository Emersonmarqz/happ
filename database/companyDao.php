<?php 
include_once 'repositorio.php';
include_once '../model/Company.php';
class Company {
    public function createNewCompany($nameCompany, $addressCompany, $type_company){
        $sql = "INSERT INTO companies SET name_comapny ='".$nameCompany."', address ='".$addressCompany."', type_company ='".$type_company."'";
        $sql = $this->db->prepare($sql);
        $sql->execute();
        if($sql->rowCount() == 1){
            return 'company_add_success';
        }
            return 'erro_add_company'; 
    }
}