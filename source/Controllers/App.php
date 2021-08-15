<?php 

    namespace Source\Controllers;
    use Source\Models\Message;
    use Source\Models\Finance;


class App extends Controller
    {
        public function __construct()
        {
            ;
            if(empty($_SESSION["id_user"]) || !$user_msg = (new Message())-> findById($_SESSION["id_user"])){
                session_destroy();
                redirect();
                
            }
            
            $this->msg_count = $user_msg;
            $this->template = views("/_app_template");  
        }

        public function home()
        {

            $currentDate = explode("-",date("d-m-Y"));

            $data = (new Finance())->getDataDashboard($_SESSION['id_user'], $currentDate[2]);

            
            $dataDashboard = $data[0];
            $minDate = $data[1]["MONTH(MIN(date))"];
            
            parent::render("/home", [
                "title" => site('name')."Home",
                "currentDate" => $currentDate,
                "dataDashboard" => $dataDashboard,
                "minDate" => $minDate
            ]);
        }

        public function registerCompany()
        {
            parent::render("/register_company", [
                
            ]);
        }


        public function logoff()
        {
    
            session_destroy();     
            redirect();
            
        }
    }