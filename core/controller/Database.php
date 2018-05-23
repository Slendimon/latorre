<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
<<<<<<< HEAD
		$this->user="root";$this->pass="";$this->host="localhost";$this->ddbb="assistlist";
=======
		$this->user="root";$this->pass="";$this->host="localhost";$this->ddbb="latorre";
>>>>>>> 263a06cfd15139f8c73549f3a01eb19dcab8d141
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
