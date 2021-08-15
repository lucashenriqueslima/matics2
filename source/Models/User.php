<?php

    namespace Source\Models;
    

    Class User extends Model
    {

        public function login($login, $passwd)
        {   
            $query = $this->pdo->prepare("SELECT * FROM sub_users WHERE sub_users.email = ? AND sub_users.passwd = ? OR sub_users.cpf = ? AND sub_users.passwd = ?");
            $query->execute(array($login, $passwd, $login, $passwd));
            if ($query->rowcount() == 1){
                return $query->fetch();
            }

            return false;
        }

        



    }