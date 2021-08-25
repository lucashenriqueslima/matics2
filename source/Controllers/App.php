<?php 

    namespace Source\Controllers;
    use Source\Models\Message;
    use Source\Models\Finance;


class App extends Controller
    {

        

        public function __construct()
        {

            if(empty($_SESSION["id_user"]) || !$this->user_msg = (new Message())->findMessages($_SESSION["id_user"])){
                session_destroy();
                redirect();
                
            }

            $this->template = views("/_app_template");  
        }

        public function home()
        {
            
            $currentDate = date("d-m-Y");
            $minDate = date("d-m-Y",strtotime(date("Y-m-d")."-12 month"));

            $data = (new Finance())->getGraph($_SESSION['id_user'],  $minDate, $currentDate);            

            $currentDate = explode("-",date("d-m-Y"));
            
            parent::render("/home", [
                "title" => site('name')."Home",
                "currentDate" => $currentDate,
                "dataDashboard" => $data,
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