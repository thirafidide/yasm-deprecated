<?php

// simple controller example
// you can access Slim app instance via $this->app

class Home extends Controller {

	function index($name) {

		$dosens = Dosen::all();
		// use controller render instead standard $this->app->render
		// for render view in views directory
		$this->render('test.php', array('name' => $name, 'dosens' => $dosens)); 
	}
}