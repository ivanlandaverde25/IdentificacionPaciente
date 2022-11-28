<?php
    class ErrorMessages{

            const ERROR_USER_NEWEXPEDIENTE_EXISTS = '203478';

            private $errorList = [];

        public function __construct(){
            $this->errorList = [
                ErrorMessages::ERROR_USER_NEWEXPEDIENTE_EXISTS => 'El número de expediente ya fue creado anteriormente'
            ];
        }

        public function get( $hash ){
            return $this->errorList[ $hash ];
        }

        public function existsKey( $key ){
            if( array_key_exists( $key, $this->errorList ) ){
                return true;
            }else{
                return false;
            }
        }
    }
?> 