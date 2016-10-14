<?php
namespace modules\user\controller;
use \libs\kernel\ControllerBase as CB;
use modules\DB;

class ControllerUser extends CB{

	public function index($app, $response){
       $app->view->render($response,"/user/index.php",["csda"=>1]);
	}

	public function login($app, $response){
       $app->view->render($response,"/user/login.php",["csda"=>1]);
	}


    public function cadastrar($app, $response, $post){
        $app->view->render($response,"/user/cadastrar.php");
    }

	//metodo enviado por post
	public function create($app, $response, $post){
	    $db = \libs\database\DB::instance();

        $db->insert('user', $post);
        $app->view->render($response,"/user/login.php");
	}
}