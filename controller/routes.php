<?php

$config = [
    'settings' => [
        'displayErrorDetails' => true
    ],
    'view' => new Slim\Views\PhpRenderer("./modules")
];

$app = new Slim\App($config);


/**
 * ========================================================
 *              authentication
 * ========================================================
 **/

$authentication = function ($request, $response, $next) {

    if(\libs\kernel\Auth::isActive())
        return $next($request, $response);
    else
        return $this->view->render($response, "/user/login.php");

};
/**
 * ========================================================
 *              end authentication
 * ========================================================
 **/


$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, "/404.php", $args);
});


/**
 * rota nivel 1 chamando class e metodo do modulo
 * onde por padrão ele chama o index caso não chame mais nada
**/
$app->get('/{class}', function ($request, $response, $args) {
    $class = '\modules\\'.$args['class'].'\controller\Controller'.ucfirst($args['class']);
    
    call_user_func_array(array($class, "index"), array($this, $response, $args));

})->add($authentication);


/**
 * rota nivel 2 chamando class e metodo do modulo
 * onde por padrão ele chama o index caso não chame mais nada
 **/
$app->get('/{class}/{method}', function ($request, $response, $args) {
    $class = '\modules\\'.$args['class'].'\controller\Controller'.ucfirst($args['class']);

    call_user_func_array(array($class, $args['method']), array($this, $response, $args));

})->add($authentication);


/**
 * rota nivel 2 chamando class e metodo do modulo mandado por post
 *
 **/
$app->post('/{class}/{method}', function ($request, $response, $args) {
    $class = '\modules\\'.$args['class'].'\controller\Controller'.ucfirst($args['class']);

    call_user_func_array(array($class, $args['method']), array($this, $response, $_POST));

});



/**
 * ========================================================
 *              Rotas para Json gerados
 * ========================================================
**/

/**
 * rota nivel 3 chamando class e metodo do modulo
 * onde por padrão ele chama o json caso não chame mais nada
 *
 * esse modo de chamada é para trazar as infomações por json.. só retorna json
 **/
$app->get('/{class}/{id}/json', function ($request, $response, $args) {
    $class = '\modules\\'.$args['class'].'\controller\Controller'.ucfirst($args['class']);

    call_user_func_array(array($class, "json"), array($this, $response, $args));
});
/**
 * rota nivel 2 chamando class e metodo do modulo
 * onde por padrão ele chama o json caso não chame mais nada
 *
 * esse modo de chamada é para trazar as infomações por json.. só retorna json
 **/
$app->get('/{class}/json', function ($request, $response, $args) {
    $class = '\modules\\'.$args['class'].'\controller\Controller'.ucfirst($args['class']);

    call_user_func_array(array($class, "json"), array($this, $response, $args));
});

$app->run();
