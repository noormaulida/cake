<?php
App::uses('CakeEmail', 'Network/Email');
class UsersController extends AppController {
	public $component = array(
		'Session', 
		'Auth' => array(
			'loginRedirect' => array(
				'controller' => 'posts'),
			'logoutRedirect' => array(
				'controller' => 'users',
				'action' => 'login')));

	public function index() {
		/*$this->autoRender = false;
		$dir = new Folder(WWW_ROOT);
		$files = $dir->read(true, array('files', 'index.php'));*/
		//$this->set('time', $this->Time->convert(time(), 'Asia/Jakarta'));

	}	

	public function search() {
		
	}
	
	
}

?>