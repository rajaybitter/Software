<?php
			$user = root;
			$pass = LeeLee431;
			$db = new PDO( 'mysql:host=localhost;dbname=Software', $user, $pass); 	
			


			$id =1;
			/*echo "1";	
			getImage($id);
		   	function getImage($id){*/
				$d = $db->prepare('SELECT * FROM Product WHERE ID=${id}');
				
				$query = $db->prepare( $sql );
				$query->execute();
			    $results = $query->fetchAll( PDO::FETCH_ASSOC );
			    foreach( $results as $row ){}		  
			    echo $row['Picture']; 


?>