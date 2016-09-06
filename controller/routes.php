<?php

$config = [
    'settings' => [
        'displayErrorDetails' => true
    ],
    'view' => new Slim\Views\PhpRenderer("./modules")
];

$app = new Slim\App($config);


$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, "/404.php", $args);
});


/**
 * rota nivel 2 chamando class e metodo do modulo
 * onde por padrão ele chama o index caso não chame mais nada
**/
$app->get('/{class}', function ($request, $response, $args) {
    $class = '\modules\\'.$args['class'].'\controller\Controller'.ucfirst($args['class']);
    
    call_user_func_array(array($class, "index"), array($this, $response));

});


$app->run();
