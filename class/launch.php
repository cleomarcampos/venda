<?php 
	class Launch{
		public function listLaunch(){
			$query = "SELECT * FROM launchs";
			$stmt = $this->db->prepare($query);
			$stmt->execute();
			return $stmt->fetchall(\PDO::FETCH_ASSOC);
		}
	}
 ?>