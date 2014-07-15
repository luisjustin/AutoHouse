<?php
class Socket {
	private $host = "127.0.0.1";
	private $port = 80;
	public $timeout = 15;
	
	private $socket = null;
	privete $err = null;
	
	public function __construct($host, $port, $timeout){
		$this->host = $host;
		$this->port = $port;
		$this->timeout = $timeout;
		return true;
	}
	
	public function __destruct(){
		socket_close($this->socket);
	}
	
	public function create(){
		$this->socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
		socket_set_nonblock($this->socket) or die("Error Code: socket@0002");
		if($this->socket){
			return true;
		}else{
			return false;
			die("Error Code: socket@0001");
		}
	}
}