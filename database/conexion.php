<?php 

class Conexion
{
	protected $host = "localhost";
	protected $usu = "root";
	protected $pass = "s1st3m45";
	protected $db = "UAP";
	
	function __construct($host, $usu, $pass, $db)
	{
		$this->host 	= $host;
		$this->usu 		= $usu;
		$this->pass 	= $pass;
		$this->db 		= $db;
	}
}