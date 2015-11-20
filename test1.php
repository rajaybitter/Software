<!DOCTYPE html>
<html>
	<body>
		<?php 
		    $id =$_GET['ID'];
		    $id = 1;
		    $user = root;
		    $pass = LeeLee431;
		    $db = new PDO( 'mysql:host=localhost;dbname=Software', $user, $pass);
		    $sql = "SELECT * FROM Product WHERE ID=${id}";
		    $query = $db->prepare( $sql );
		    $query->execute();
		    $results = $query->fetchAll( PDO::FETCH_ASSOC );
		    foreach( $results as $row ){}		  
		    echo $row['Picture'];
		?>
	</body>
</html>	