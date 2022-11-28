<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <script src="https://kit.fontawesome.com/f26934293f.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <h1><?php
        $this->showMessages();  
    ?></h1>
    <div class="fondo-image">
    <div id="central">
        <div class="superior">
            <a href="#"></a>
        </div>
            <div id="login">
                <div class="content">
                    <header class="inicio">
                        <label>INICIE SESIÓN PARA CONTINUAR</label>
                    </header>
                    <form id="#">
                        <label>
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="usuario" placeholder="Usuario" required>
                        </label>
                        
                        
                        <label>
                            <i id="icono" class="fa-solid fa-eye"></i>
                            <input type="password" placeholder="Contraseña" name="password" required >
                        </label>
                        
                               
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Ingresar</button>
                       
                    </form>
                </div>   
                
               
            </div>
                <div class="image">        
                    <input type="text" name="username" class="text" >
                </div>
        </div>  
        <script src="js/main.js"></script>

           
</body>
</html>