<?php
include '../core/model.php';
class Company extends model {
    public function createNewCompany($nameCompany, $cpnjCompanie, $emailCompanie, $cityCompanie, 
                                                            $stateCompanie, $passwordCompanie){
        $sql = "INSERT INTO companies SET name_company = '$nameCompany', cnpj = '$cpnjCompanie', email = '$emailCompanie',
                    state = '$stateCompanie', city = '$cityCompanie',  `password` = '$passwordCompanie' ";
        $sql = $this->db->prepare($sql);
        $sql->execute();
        if($sql->rowCount() == 1){
            return 'company_add_success';
        }
            return 'erro_add_company'; 
    }
}