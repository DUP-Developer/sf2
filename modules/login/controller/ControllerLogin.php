<?php
namespace modules\login\controller;
use \libs\kernel\ControllerBase as CB;

class ControllerLogin extends CB{

	public function index($app, $response){
		$app->view->render($response, "/login/index.php");
			
	}
}