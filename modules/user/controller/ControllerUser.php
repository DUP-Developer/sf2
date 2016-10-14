<?php
namespace modules\user\controller;
use \libs\kernel\ControllerBase as CB;

class ControllerUser extends CB{

	public function index($app, $response){
       $app->view->render($response,"/user/index.php",["csda"=>1]);
	}
}