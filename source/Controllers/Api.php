<?php

    namespace Source\Controllers;
    use Source\Models\Message;


    class Api extends Controller
    {
        public function __construct()
        {
            //TODO: VERIFICACAO JWT
        }

        public function teste($data)
        {
            parent::encrypt($data);

            

        }

         public function msgCounterReset($data)
            {
                $id = $data["id"];
                if($data["id"] != $_SESSION['id_user']){
                $data["id"] = 1;
                }
                $msgCount = (new Message())->msgCounterReset($id);  
                
            }
    }