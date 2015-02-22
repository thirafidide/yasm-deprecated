<?php

class Home extends Controller {

	function index($name) {

		$dosens = Dosen::all();
		$this->render('test.php', array('name' => $name, 'dosens' => $dosens));
	}
}