<?php
    #Controladores desde la ruta
    Flight::route('/action/@controller', function($controller){
        Controller::run($controller);
    });
    
    Flight::route('/', function(){
        View::render('template/ini', 
            array(
                'title' => "Inicio",
                "description" => "Otra creación de Konecta.la"
            )
        );
        View::render('home');
        View::render('template/fin');
    });

    Flight::route('/inicio', function(){
        Flight::redirect('/');
    });  






