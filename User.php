<?php
class User {
	protected $login;
	private $password;

	public function __construct($login="", $password="") {
		$this->login = $login;
		$this->password = $password;
	}

	public function getLogin() {
		return $this->login;
	}
}

$user= new User('u','p');
echo $user->getLogin(); // u