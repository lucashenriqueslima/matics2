<?php 

    namespace Source\Controllers;

    abstract class Controller
    {   

        private $router;
        protected $template;
        protected $user_msg;

        public function __construct($router)
        {
            $this->router = $router;
        }

        public function render($content, $vars = [])
        {   
            $content = views($content);
            if(file_exists($content)){
                $vars["user_msg"] = $this->user_msg;
                extract($vars);
                require($this->template);
            }
        }

        public function ajaxResponse(string $param = null, array $values = null): string
        {
            return json_encode([$param => $values]);
        }
        
        
    }


   