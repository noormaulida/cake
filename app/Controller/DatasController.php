<?php
class DatasController extends AppController {
	public $helpers = array('Html', 'Form');
	public $component = array('Session');

	public function index () {
		$this->render();
	}

}

?>