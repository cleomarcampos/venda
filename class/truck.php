<?php 
require_once("vehicle.php");

	class Truck Extends Vehicle{

		public function listTruck(){
			$query = "SELECT * FROM trucks";
			$stmt = $this->db->prepare($query);
			$stmt->execute();
			return $stmt->fetchall(\PDO::FETCH_ASSOC);

		}
	}
 ?>