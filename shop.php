<?php
	$user = root;
	$pass = LeeLee431;

	try {
		//create PDO connection
		$db = new PDO( 'mysql:host=localhost;dbname=Software', $user, $pass);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		//show error
	    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
	    exit;
	}	

	if ($_GET['func'] == 'getImage'){
		getImage($_GET['ID'], $db);
	}elseif ($_GET['func'] == 'getName'){ 
		getName($_GET['ID'],$db);
	}elseif ($_GET['func'] == 'getPrice'){
		getPrice($_GET['ID'],$db);
	}elseif ($_GET['func'] == 'getDesc'){
		getDesc($_GET['ID'],$db);
	}
	
   	function getImage($id,$db){
		$sql = "SELECT * FROM Product WHERE ID=${id}";
		$query = $db->prepare( $sql );
		$query->execute();
		$results = $query->fetchAll( PDO::FETCH_ASSOC );
		foreach( $results as $row ){}		  
		echo $row['Picture'];
	}
	function getName($id,$db){
		$sql = "SELECT * FROM Product WHERE ID=${id}";
		$query = $db->prepare( $sql );
		$query->execute();
		$results = $query->fetchAll( PDO::FETCH_ASSOC );
		foreach( $results as $row ){}		  
		echo $row['Name'];
	}
	function getPrice($id,$db){
		$sql = "SELECT * FROM Product WHERE ID=${id}";
		$query = $db->prepare( $sql );
		$query->execute();
		$results = $query->fetchAll( PDO::FETCH_ASSOC );
		foreach( $results as $row ){}		  
		echo $row['Price'];
	}
	function getDesc($id,$db){
		$sql = "SELECT * FROM Product WHERE ID=${id}";
		$query = $db->prepare( $sql );
		$query->execute();
		$results = $query->fetchAll( PDO::FETCH_ASSOC );
		foreach( $results as $row ){}		  
		echo $row['Description'];
	}
?>		   
			   