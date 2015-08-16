<?php

class oDB{

	function oDB(){
		// Database hostname.
		$this->dbServer = 'porticus';
		// Database name.
		$this->dbName = 'fscs_forms';
		// Database username.
		$this->dbUser = 'fscs_forms';
		// Database password.
		$this->dbPass = 'yips4Avrady';
		$this->setupDB();
	}
	
	function setupDB(){
	
		// Database type for example mysql, pgsql etc. Anyone supported by PHP PDO.
		$pdo_database = "mysql";
		
		// Create a new instance of the PDO object.
		$this->pdo = new PDO ("$pdo_database:host=$this->dbServer;dbname=$this->dbName","$this->dbUser","$this->dbPass");
		$this->pdo->exec('SET CHARACTER SET utf8');
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	}
	
	function getRS($aData){
		$stmt = $this->pdo->prepare($aData['sSql']);
		if(isset($aData['bindings'])){
			foreach ($aData['bindings'] as $k => $v ){
					$stmt->bindParam(':'. $k, $aData['bindings'][$k]);
				}
		}
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}
	
	function update($aData){
		$stmt = $this->pdo->prepare($aData['sSql']);
		if(isset($aData['bindings'])){
			foreach ($aData['bindings'] as $k => $v ){
					$stmt->bindParam(':'. $k, $aData['bindings'][$k]);
				}
		}
		$stmt->execute();
		if($aData['returnID']){
			return $this->pdo->lastInsertId();
		}else{
			return "";
		}
	}
}

?>
