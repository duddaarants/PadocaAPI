<?php
 
class DbOperation
{
    
    private $con;
 
 
    function __construct()
    {
  
        require_once dirname(__FILE__) . '/DbConnection.php';
 
     
        $db = new DbConnection();
 

        $this->con = $db->connect();
    }
	
	
	function createpaes($name, $preco, $qtde){
		$stmt = $this->con->prepare("INSERT INTO paes (name, preco,qtde) VALUES (?, ?, ?, ?)");
		$stmt->bind_param("sdi", $name, $preco, $qtde);
		if($stmt->execute())
			return true; 			
		return false;
	}
	
	function getpaes(){
		$stmt = $this->con->prepare("SELECT id, name, preco, qtde FROM paes");
		$stmt->execute();
		$stmt->bind_result($id, $name, $preco, $qtde);
		
		$paes = array(); 
		
		while($stmt->fetch()){
			$pao  = array();
			$pao['id'] = $id; 
			$pao['name'] = $name; 
			$pao['preco'] = $preco; 
			$pao['qtde'] = $qtde; 
			
			
			array_push($paes, $pao); 
		}
		
		return $paes; 
	}

}

