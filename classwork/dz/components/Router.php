<?php


class Router {

    private $routes;

    public function __construct() {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run() {
        // Отримати стрічку запиту.

        $uri = $this->getURI();
        // echo $uri;

        // Перевірити наявність такого запиту в routes.php
        foreach ($this->routes as $uriPattern => $path) {
            // echo "<hr>$uriPattern -> $path";
            if (preg_match("~$uriPattern~", $uri)) {

                // echo '<br> Де шукаємо (запит, який набрав користувач): '.$uri;
                // echo '<br> Що шукаємо (співпадіння з правилами): '.$uriPattern;
                // echo '<br> Хто обробляє: '.$path;

                // Отримуємо внутрішній шлях із зовнішнього, згідно правил
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                // echo "<br><br> Потрібно сформувати: ".$internalRoute;



                // echo "+";
                // echo $path;

                $segment = explode('/', $internalRoute);
                // echo '<pre>';
                // print_r($segment);
                // echo '</pre>';
                
                
                $controllerName = ucfirst(array_shift($segment).'Controller');
                $actionName = 'action'.ucfirst(array_shift($segment));

                $parameters = $segment;
                // print_r($parameters);

                // Підключаємо файл класу контролера:
                // echo "Клас: $controllerName";
                // echo "<br>Метод: $actionName <br>";

                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                // echo $controllerFile;

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                // Створюємо об'єкт класу контролера і викликаємо первний action:

                $controllerObject = new $controllerName;
                // $result = $controllerObject->$actionName($parameters);
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
            }
        }
    }



}


?>