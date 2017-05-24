# Konectala-PHP-Boilerplate DOCS

Routing: Se está usando FlightPhp para el manejo de rutas
Flight::route('/', function(){});

Cargar vistas:
Se accede a la clase View a su metodo de clase render
View::render("Vista"); //<- Estas vistas están dentro de la carpeta view del proyecto. No se debe poner .php al llamarla

Cargar Controladores
Controller::run("Controlador");

Cargar Modelo
Model::load("Modelo");
