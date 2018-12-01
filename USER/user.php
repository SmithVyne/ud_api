<?php

	
	

			$errors = [];
			$missing = [];
		    $expected = ['username', 'password'];
		    $required = ['username', 'password'];

	
	    // ---------------------------------------------------------------------------------------------------------------

	// if ( isset($_GET['username']) && isset($_GET['password'])){

			// header('Access-Control-Allow-Origin: *');

			$servername ="localhost";//servername
			$username="newuser";//db_username
			$password=123;//db_password
			$db="test";//fbsql_database(link_identifier)

		$cn = new mysqli($servername, $username, $password, $db);

			$username = $_POST['username'];
			$password = $_POST['password'];

		$arr = ['Name'=>'$username','Password'=>'$password'];


			header('Access-Control-Allow-Origin: *');
			header('Content-type: application/json');
				echo json_encode ($arr);
  
			
					$someData = ['Name' => 'Ene', 'Password' =>'Abah','Age' => 18];
					$second = ['Name' => 'Smith', 'Password' =>'MyPass','Age' => 19];
					$third = ['Name' => 'Godwin', 'Password' =>'HisPass','Age' => 15];
	// }

					
























































// 			});
// 				$klein->respond('GET', "/index.php/posts/ene/pass", function () {//second istance
				
// 				enePass();

// 			});

// 			$klein->dispatch();

				

?>