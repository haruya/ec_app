<?php

class AbstractData
{
	protected $pdo;
	
	public function __construct() {
		$this->connectDb();
	}
	
	protected function connectDb() {
		$this->pdo = new PDO('mysql:dbname=ec;charset=utf8;host=localhost', 'root', 'ichikawa');
	}
	
	protected function query($sql) {
		return $this->pdo->query($sql);
	}
	
	protected function exec($sql) {
		return $this->pdo->exec($sql);
	}
}