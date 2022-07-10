<?php

    namespace App\Classes;
    
    class ClassPayment{

        private $url;
        private $post;
        private $token;
        private $payment;
    
        //Curls
        private function curls($action){
            $ch=curl_init();
            curl_setopt($ch,CURLOPT_URL,$this->url);
            curl_setopt($ch,CURLOPT_HEADER,false);
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
            curl_setopt($ch,CURLOPT_POST,true);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$this->post);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($ch,CURLOPT_USERPWD,CLIENTID.':'.SECRETKEY);
            $data=curl_exec($ch);
            curl_close($ch);
            var_dump(json_decode($data));
        }
    
        //Get a access token
        public function getToken()
        {
            $this->url=URL.'v1/oauth2/token';
            $this->post="grant_type=client_credentials";
            $this->curls('token');
        }
    }
?>