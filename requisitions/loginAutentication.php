<?php
include '../model/Company.php';


    $company = new Company;
    $passwordCompanie = md5($_POST['password']) ;
    $emailCompany = addslashes($_POST['login']);
    $returnUser = $company->getDataCompany($emailCompany, $passwordCompanie);
    if($returnUser != 'company_not_found'){
        session_start();
        $_SESSION['idUser'] = (int)$returnUser['id'];
        $_SESSION['emailUserCompany'] = $returnUser['email'];
        $_SESSION['name_company'] = $returnUser['name_company'];
        $_SESSION['stateCompany'] = $returnUser['state'];
        $_SESSION['cityCompany'] = $returnUser['city'];
        $_SESSION['specialityCompany'] = $returnUser['specialityCompany'];
    }
    echo json_encode(array(
        "dataUser" => $returnUser
    ));


