<?php
    class Login extends Controller{
        function __construct(){
            parent::__construct();
            error_log( 'LOGIN::construc -> Inicio de login' );
        }

        function render(){
            $this->view->render('login/index');
        }
    }
?>