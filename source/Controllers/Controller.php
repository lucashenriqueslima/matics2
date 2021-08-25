<?php 

    namespace Source\Controllers;

    abstract class Controller
    {   

        protected $template;
        protected $user_msg;


        public function render($content, $vars = [])
        {   
            $content = views($content);
            if(file_exists($content)){
                $vars["user_msg"] = $this->user_msg;
                extract($vars);
                include($this->template);
            }
        }

        public function ajaxResponse(string $param = null, array $values = null): string
        {
            return json_encode([$param => $values]);
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


   