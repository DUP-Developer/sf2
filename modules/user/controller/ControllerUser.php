<?php
namespace modules\user\controller;
use \libs\kernel\ControllerBase as CB;
use modules\DB;

class ControllerUser extends CB{

	public function index($app, $response){
       $app->view->render($response,"/user/index.php",["csda"=>1]);
	}

	public function logout($app, $response){
	    \libs\kernel\Auth::remove();
        
       $app->view->render($response,"/user/login.php");
	}


    public function sigin($app, $response, $post){
        $db = \libs\database\DB::instance();

        $rest = $db->select("user", "*", ["nome"=>$post['name']]);

        if($rest != null){
            \libs\kernel\Auth::setUser($rest);

            $app->view->render($response,"/user/index.php");
        }else
            $app->view->render($response,"/user/login.php",['error'=>"login errado fio"]);

    }

	//metodo enviado por post
	public function create($app, $response, $post){
	    $db = \libs\database\DB::instance();

        $db->insert('user', $post);
        $app->view->render($response,"/user/login.php");
	}
}