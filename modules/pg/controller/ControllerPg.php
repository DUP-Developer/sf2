<?php

namespace modules\pg\controller;

class ControllerPg{

	public function index($app, $response){
		$app->view->render($response, "/pg/index.php");
	}
}
