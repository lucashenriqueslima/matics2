<?php
    
    
    namespace Source\Models;

    Class Message extends Model
    {

        
        
        public function findMessages($id_user)
        {
        
            $query = $this->pdo->prepare("SELECT mesages.link
     , mesages.icon_type
     , mesages.icon
     , mesages.date
     , mesages.message
  FROM mesages
 WHERE id_user = ?");

            $query->execute(array($id_user));
            if ($query->rowcount() != 0){
                return $query->fetch();
            }
             return false;
             
        }
        
        public function msgCounterReset($id_user)
        {
            $query = $this->pdo->prepare("UPDATE sub_users SET msg_count = 0 WHERE id_user = ?");
            $query->execute(array($id_user));
        }
    

    }