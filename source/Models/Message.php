<?php
    
    
    namespace Source\Models;

    Class Message extends Model
    {
        
        public function findById($id_user)
        {
        
            $query = $this->pdo->prepare("SELECT users.msg_counter FROM users WHERE id_user = ?");
            $query->execute(array($id_user));
            if ($query->rowcount() != 1){
                return false;
            }
             $msg_count = $query->fetch();
             return $msg_count["msg_counter"];  
        }
        
        public function msgCounterReset($id_user)
        {
            $query = $this->pdo->prepare("UPDATE sub_users SET msg_count = 0 WHERE id_user = ?");
            $query->execute(array($id_user));
        }
    

    }