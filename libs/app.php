<?php

    require_once 'controllers/errores.php';

    class App{
        function __construct(){
            $url = isset( $_GET['url'] ) ? $_GET['url'] : null;
            $url = rtrim( $url, '/' );
            $url = explode( '/', $url );

            if ( empty( $url[0] ) ) {
                error_log('APP::Construct-> no hay controlador especificado');
                $fileController = 'controllers/login.php';
                require_once $fileController;
                $controller = new Login();
                // error_log( 'ERROR MAMONNNNN!!!!!!');
                $controller->loadModel('login');
                $controller->render();
                return false;
            }

            $fileController = 'controllers/' .$url[0]. '.php';

            if ( file_exists( $fileController ) ) {
                require_once $fileController;

                $controller = new $url[0];
                $controller->loadModel( $url[0] );

                if ( isset( $url[1] ) ) {
                    if( method_exists( $controller, $url[1] ) ) {
                        if ( isset( $url[2] ) ) {
                            // Num de paramtros que trae la URL
                            $numParam = count( $url ) - 2;
                            // Arreglo de parametros
                            $params = [];

                            for( $i = 0; $i < $numParam; $i++ ) {
                                arrary_push( $params, $url[$i] + 2 );
                            }
                            // Envio de parametros al metodo a rendenrizar
                            $controller->{ $url[1] }( $params );
                        }else {
                            // No tiene parametros, se manda a llamar el metodo tal cual
                            $controller->{ $url[1] }();
                        }
                    }else{
                        // Error, no existe el metodo
                        $controller = new Errores();
                        $controller->render();
                        
                    }
                }else{
                    // No hay metodo a cargar, se carga el metodo por default
                    $controller->render();
                }
            }else{
                // No existe el archivo, manda error
                $controller = new Errores();
                $controller->render();
            }
        }
    }
?>