<?php

    namespace Source\Controllers;

    class Auth extends Controller
    {
        public function login($data)
        {
            $login = $data["email"];
            $passwd = filter_var($data["passwd"]);
            
            if(!$passwd || !$login){
                echo $this->ajaxResponse("message", [
                    "type" => "error",
                    "message" => "Preencha todos os campos!"
                ]);
                return;
            }

               

            /*$user = (new User())->find("email = :e AND passwd = :p  OR cpf = :c AND passwd = :p" , "e={$login}&c={$login}&p={$passwd} ")->fetch();

            
            if ($user) {
                
                echo $this->ajaxResponse("redirect", ["url" => $this->router->route("app.home")]);
                $_SESSION["userAdmin"] = $user->id;
                $_SESSION["emailAdmin"] = $user->email;
                $_SESSION["nameAdmin"] = $user->first_name." ".$user->last_name;

                if(!empty($_SESSION["nameAdmin"])){
                flash("blue darken-3", "Seja bem-vindo ao painel de controle {$_SESSION["nameAdmin"]}  :-)");
                }
                return;
                
            } 

            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => "Login ou senha incorreto(s)"
            ]);
          
            return;       
        }
        */
        }
    }