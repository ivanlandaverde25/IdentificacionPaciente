<?php
    class Login extends Controller{
        function __construct(){
            parent::__construct();
            error_log( 'LOGIN::construc -> Inicio de login' );
        }
        
        function render(){
            error_log( 'LOGIN::render -> Carga el index del login' );
            $this->view->render('login/index');
        }
    }
?>