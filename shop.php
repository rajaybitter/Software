<?php
	$errmsg_arr = array();
	$errflag = false;
	// configuration
	$dbhost 	= "localhost";
	$dbname		= "Software";
	$dbuser		= "root";
	$dbpass		= "LeeLee431";
	try {
		//create PDO connection
		$db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpass);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
		//show error
	    echo '<p class='bg-danger'>'.$e->getMessage().'</p>';
	    exit;
	}
	if($_POST['functionName'] == 'getImage'){
		getImage($_POST['variable']);
	}

	function getImage($id){
		$id = $db->prepare('SELECT Picture FROM Product WHERE ID=:id');
		$id->execute(array('ID'=> $id));
		$row = $id->fetch();
		echo $row['Picture']; 
		}
   	}
?>		   
			   