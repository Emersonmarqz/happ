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

    public function checkUserForLogin($passwordCompany, $emailCompany){
        $sql = "SELECT name_company FROM companies WHERE `password` = '$passwordCompany' AND `email` = '$emailCompany' ";
        $sql = $this->db->prepare($sql);
        $sql->execute();
        if($sql->rowCount() == 1){
            return 'company_login_success';
        }
            return 'erro_login_company'; 
    }

    public function getDataCompany($email,$password){
        $sql = "SELECT * FROM companies where email = '$email' and `password` = '$password' ";
        $sql = $this->db->prepare($sql);
        $sql->execute();
        if($sql->rowCount() > 0){
            $sql = $sql->fetch();
            $dados = array(
                'id' => $sql['id_company'],
                'email' => $sql['email'],
                'name_company' => $sql['name_company'],
                'state' => $sql['state'],
                'city' => $sql['city'],
            );
            return $dados;
        }
            return  'company_not_found';
}

}