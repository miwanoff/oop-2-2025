<?php
require_once "User.php";

class Admin extends User {
	private $rights;

	public function __construct($login, $password, $rights) {
		parent::__construct($login, $password);
		$this->rights = $rights;
	}

	public function getRights() {
		return $this->rights;
	}

	public function setRights($rights) {
		$this->rights = $rights;
	}

	public function getInfo() {
		return $this->getLogin() ."\t".$this->rights;
        // return parent::
	}
}

$admin = new Admin('admin', 'Password', 1);
echo $admin->getLogin(); // admin
echo $admin->getRights(); // 1
echo $admin->getInfo(); // admin	1
//echo $admin->login; // Cannot access protected property Admin::$login