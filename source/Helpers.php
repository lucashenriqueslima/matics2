<?php

function site(string $param = null): string
    {
        if($param && !empty(SITE[$param])){
            return SITE[$param];
        }

        return SITE["root"];
    }

    function views(string $path): string
    {
        return VIEWSPATH.$path.".php";
    }

    function route(string $path = null): string
    {
        return site().$path;
    }

    function asset(string $path, $time = true): string
    {
        return SITE['root']."/views/assets/{$path}";
        
/*
        if($time && file_exists($fileOnDir)){
            $file .="?time=".filemtime($fileOnDir);
        }
         
        return $file;
        */
    }

    function setFlash($type, $msg){

        if($type == 1){
            $_SESSION["success"] = $msg;
        }

        if($type == 2){
            $_SESSION["error"] = $msg;
        }
       
    }
    function flash(string $type = null, string $message = null): ?string
    {
        if($type && $message){
            $_SESSION["flash"] = [
                "type"=> $type,
                "message"=> $message
            ];
            
            return null;
        }

        if(!empty($_SESSION["flash"])){
            
            echo "<script>const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
              Toast.fire({
                icon: '".$_SESSION['flash']['type']."',
                title: '".$_SESSION['flash']['message']."'
              })</script>";

            unset($_SESSION['flash']);
        }

        return null;
    }

    function redirect($url = null)
    {
   echo "<script> window.location.href = '".site().$url."' </script>";
 
    }


    function verifyAccess($i)
    {
        if(isset($i) && $_SESSION['access'][$i] == false){
            redirect("/me");
            flash("error", "Acesso negado ¯\_( ͡❛ ͜ʖ ͡❛)_/¯");
            
        }
    }

    function scriptJs($script)
    {
        return "<script> ".$script." </script>";
    }

    
    function convertMonth($month)
    {
        switch ($month) {
            case 1:
                return "Janeiro";
                break;
                
                case 2:
                    return "Fevereiro";
                    break;

                    case 3:
                        return "Março";
                        break;

                        case 4:
                            return "Abril";
                            break;

                            case 5:
                                return "Maio";
                                break;
                                
                                case 6:
                                    return "Junho";
                                    break;

                                    case 7:
                                        return "Julho";
                                        break;
                                        
                                        case 8:
                                            return "Agosto";
                                            break;

                                            case 9:
                                                return "Setembro";
                                                break;

                                                case 10:
                                                    return "Outubro";
                                                    break;

                                                    case 11:
                                                        return "Nomvembro";
                                                        break;

                                                        case 12:
                                                            return "Dezembro";
                                                            break;
                                        
        }
    }

        function message($messages)
        {
            echo '<a class="dropdown-item d-flex align-items-center" href="'. $messages['link'] .'">
            <div class="mr-3">
                <div class="icon-circle '.$messages['icon_type'].'">
                    <i class="'.$messages['icon'].'"></i>
                </div>
            </div>
            <div>
                <div class="small text-gray-500">'.$messages['date'].'</div>
                '.$messages['message'].'
            </div>
        </a>';
        }   
    