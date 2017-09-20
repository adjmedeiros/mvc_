<?php
class model {

	protected $db;

	public function _construct() {
		global $config;

		try {
			$this->db = new \PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);

		} catch(PDOExcption $e) {
				//echo "ERRO: ".$e->getMessage();
				echo "Não foi possivel se conectar ao banco de dados!";
			exit;
		}
				
	}

}