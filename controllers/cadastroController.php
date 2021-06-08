<?php 
class cadastroController
{
    public function registerNewCompanie (){
        $nameCompanie = $_POST['nameCompanie'];
        $cpnjCompanie = $_POST['cnpjCompanie'];
        $emailCompanie = $_POST['emailCompanie'];
        $cityCompanie = $_POST['cityCompanie'];
        $stateCompanie = $_POST['stateCompanie'];
        $passwordCompanie = $_POST['passwordCompanie'];
        var_dump($nameCompanie, $cpnjCompanie, $emailCompanie, $cityCompanie, $stateCompanie, $passwordCompanie);
                    $company = new Company;
                    $return = $company->createNewCompany($nameCompanie, $cpnjCompanie, $emailCompanie, $cityCompanie, $stateCompanie, $passwordCompanie);
                    echo json_encode(array(
                        "status" => $return
                    ));
    }
}