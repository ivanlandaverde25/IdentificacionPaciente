<?php
    class SuccessMessages{
        
        const SUCCESS_USER_NEWEXPEDIENTE_EXISTS = '103478';

        private $successList = [];

        public function __construct(){
            $this->successList = [
                SuccessMessages::SUCCESS_USER_NEWEXPEDIENTE_EXISTS => 'El expediente fue creado exitosamente'
            ];
        }

        public function get( $hash ){
            return $this->successList[ $hash ];
        }

        public function existsKey( $key ){
            if( array_key_exists( $key, $this->successList ) ){
                return true;
            }else{
                return false;
            }
        }
    }
?>