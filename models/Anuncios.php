<?php
class Anuncios extends model {

	public function getQtde() {
		$sql = "SELECT COUNT(*) as c FROM anuncios";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {

			$sql = $sql->fetch();
			return $sql['c'];

		} else {

			return 0;
			
		}
	}

}