<?php
class User extends AppModel {
	public $validate = array(
						'username' => array(
							'required' => array(
								'rule' => 'noEmpty', 'message' => "Enter a username")),
						'password' => array(
							'required' => array(
								'rule' => 'noEmpty', 'message' => 'Enter password')));

	public $component = array('RequestHandler');

	public function beforeSave($options = array()) {
		if (!parent::beforeSave($options)) {
			return false;
		}
		if (isset($this->data[$this->alias]['password'])) {
			$hasher = new SimplePasswordHasher();
			$this->data[$this->alias]['password'] = $hasher->hash($this->data[$this->alias]['password']);
		}
		return true;
	}
}
?>