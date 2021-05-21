<?php
include_once 'repositorio.php';
include_once '../model/User.php';
class User {
    public function verifyPassword($idUser, $password){
        $sql ="SELECT id_user FROM users WHERE id_user = '".$idUser."' AND password = '".$password."'";
        $sql = $this->db->prepare($sql);
        $sql->execute();
        if($sql->rowCount() == 1){
            return 'password_correct';
        }
            return 'invalid_password'; 
    }
    
    public function changePasswordById($newPassword, $idUser){
        $sql = "UPDATE users SET password ='".$newPassword."' WHERE id_user ='".$idUser."'";
        $sql = $this->db->prepare($sql);
        $sql->execute();
        if($sql->rowCount()>0){
            return 'sucess_edit_password';
        }
            return 'falid_edit_password';
    }

    public function checkEmailExists($email){
        $sql = "SELECT id_user FROM users where user_email = '".$email."'" ;
        $sql = $this->db->prepare($sql);
        $sql->execute();
        if($sql->rowCount() == 0){
            return 'email_not_exists'; 
        }
            return 'email_already_exists';
    }


    public function addNewUser($email,$password,$first_name,$last_name){
        $sql = "INSERT INTO users SET user_email ='".$email."', password ='".$password."', first_name ='".$first_name."', last_name ='".$last_name."'";
        $sql = $this->db->prepare($sql);
        $sql->execute();
        return $this->db->lastInsertId();
    }

    public function editUser($query){
        $sql = "UPDATE users SET ".$query."";
        $sql = $this->db->prepare($sql);
        $sql->execute();
        if($sql->rowCount()>0){
            return 'sucess_edit_user';
        }
            return 'falid_edit_user';
    }

    public function editTypeUser($idUser,$type){
        $sql = "UPDATE users SET user_type ='".$type."' WHERE id ='".$idUser."'";
        $sql = $this->db->prepare($sql);
        $sql->execute();
        if($sql->rowCount()>0){
            return 'sucess_edit_type_user';
        }
            return 'falid_edit_type_user';
    }


    public function getAllDataUserById($idUser){
        $sql = "SELECT * FROM users WHERE id ='".$idUser."'";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0){
            $sql = $sql->fetch();
            $dados = array(
                'email' => $sql['user_email'],
                'first_name' => $sql['first_name'],
                'last_name' => $sql['last_name'],
                'specialty' => $sql['specialty']
            );
            return $dados;
        }
            return  'user_not_found';
    }

    public function getDataUsers(){
        $sql = "SELECT
                    id_user,
                    first_name, 
                    last_name, 
                    user_email, 
                    user_type, 
                    specialty
                FROM 
                    users";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0){
            $sql = $sql->fetchAll();
            // return $sql;
            $data = array();
            foreach($sql as $item){
                $dataItem = array(
                    'id_user' => $item['id_user'],
                    'user_type' => $item['user_type'],
                    'user_email' => $item['user_email'],
                    'first_name' => $item['first_name'],
                    'last_name' => $item['last_name'],
                    'specialty' => $item['specialty']
                );
                array_push($data, $dataItem);
            }
            return $data;
        }
            return  "users_not_found";
    }
}