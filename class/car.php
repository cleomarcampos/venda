<?php 
require_once("vehicle.php");

	class Car Extends Vehicle{

		public function listCar(){
			$query = "SELECT * FROM cars";
			$stmt = $this->db->prepare($query);
			$stmt->execute();
			return $stmt->fetchall(\PDO::FETCH_ASSOC);
	}
}

