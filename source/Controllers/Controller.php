<?php 

    namespace Source\Controllers;

    abstract class Controller
    {   

        protected $template;
        protected $msg_count;

        public function render($content, $vars = [])
        {   
            $content = views($content);
            if(file_exists($content)){
                $vars["msg_count"] = $this->msg_count;
                extract($vars);
                include($this->template);
            }
        }

        public function ajaxResponse(string $param = null, array $values = null): string
        {
            return json_encode([$param => $values]);
        }

        public function getIndexDate($min, $data = array())
        {
            $a = 0;
            $arr = array();
            for($i = 0; $i <= $min-2; $i++ )
            {
                $arr[$i]['credit'] = 0;
                $arr[$i]['earning'] = 0;
                $arr [$i]['expense'] = 0;
            }   

            for($i = $min-1; $i <= $min - 2 + count($data); $i++)
            {
                $arr[$i]['credit'] = $data[$a]['credit'];
                $arr[$i]['earning'] = $data[$a]['earning'];
                $arr[$i]['expense'] = $data[$a]['expense'];
                
                $a++;
            }

            

            return $arr;
        }
        
        public function encrypt($data)
        {
            $Cifra =  'AES-256-CBC';

            $IV = random_bytes(openssl_cipher_iv_length($Cifra)); 
            $TextoCifrado = openssl_encrypt($data, $Cifra, "!@_#lh@!!_", OPENSSL_RAW_DATA, $IV);
            return base64_encode($IV.$TextoCifrado);
        }

        public function decrypt($result)
        {
            $Cifra =  'AES-256-CBC';
            $TextoCifrado = mb_substr($result, openssl_cipher_iv_length($Cifra), null, '8bit');

            $IV = mb_substr($result, 0, openssl_cipher_iv_length($Cifra), '8bit');

            return $TextoClaro = openssl_decrypt($TextoCifrado, $Cifra, "!@_#lh@!!_", OPENSSL_RAW_DATA, $IV);
        }

        
}


   