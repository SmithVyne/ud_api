<?php

	
	

			$errors = [];
			$missing = [];
		    $expected = ['username', 'password'];
		    $required = ['username', 'password'];

	
	    // ---------------------------------------------------------------------------------------------------------------

	// if ( isset($_GET['username']) && isset($_GET['password'])){

			header('Access-Control-Allow-Origin: *');

			$servername ="localhost";//servername
			$username="newuser";//db_username
			$password=123;//db_password
			$db="test";//fbsql_database(link_identifier)

		$cn = new mysqli($servername, $username, $password, $db);

			

		foreach ($_POST as $key => $value) {
		    $value = trim($value);

		    if (empty($value)  && in_array($key, $required)) {
		        // $missing[] = $key;
		        // $$key = '';
		        echo "Empty";
		        // echo $key;
		        break;	
		    } elseif (in_array($key, $expected)) {
		        $$key = $value;
		        // if()
			        $username = $_POST['username'];
					$password = $_POST['password'];

					if(empty($username) || empty($password)){
						echo "Empty";
			        break;
					}

					else{
				        $var1 = "INSERT INTO users_data(Username, Password) VALUES('$username', '$password')";
						$var2 = $cn->query($var1);

						echo !$var2 ?  $cn->error :  '<br/><h1>SUCCESS</h1>';

						echo "<h1>200</h1>";
			        break;
					}
		    }
		}



		

				



			// 	// Select Elements in dataBase
			// 	$dell = "SELECT * FROM users_data Where Username = $username";
			// 	$result = $cn->query($dell);
			// 	$ar= mysqli_fetch_assoc($result); 

			// 	print_r($ar);

			// 	print_r($ar);
			// if ($result->num_rows > 0) {
			//     // output data of each row
			// 	$arr= [$username, $password];
			// 	echo json_encode ($arr);
			// 	echo "<br>";
			// 	echo "<br>";

			// }
		

	// }


	// -------------------------------------------------------------------------------//--------------------------------//-------------------------

	// else{
		$arr = ['Name'=>'Godswill@example.com','Password'=>'Okokon'];


			// header('Access-Control-Allow-Origin: *');
			// header('Content-type: application/json');
			// 	echo json_encode ($arr);
  
			
					$someData = ['Name' => 'Ene', 'Password' =>'Abah','Age' => 18];
					$second = ['Name' => 'Smith', 'Password' =>'MyPass','Age' => 19];
					$third = ['Name' => 'Godwin', 'Password' =>'HisPass','Age' => 15];
	// }

					


// 		function users(){

// 			global $arr;
// 			header('Access-Control-Allow-Origin: *');
// 			header('Content-type: application/json');
// 			echo json_encode($arr);

// 			}

// // -------------------------------------------------------------------------------------------------------------------------------------------------------

// 		function ene() {

// 				global $arr;
// 				header('Access-Control-Allow-Origin: *');
// 				header('Content-type: application/json');
// 				echo json_encode($arr[0]);
				

// 					}

// 		function eneName() {

// 				global $arr;
// 				header('Access-Control-Allow-Origin: *');
// 				header('Content-type: application/json');
// 				echo json_encode($arr[0]['Name']);
// 				// echo json_encode($arr[1]);
// 				// echo json_encode($arr[2]);

// 					}

// 		function enePass() {

// 				global $arr;
// 				header('Access-Control-Allow-Origin: *');
// 				header('Content-type: application/json');
// 				echo json_encode($arr[0]['Password']);
// 				// echo json_encode($arr[1]);
// 				// echo json_encode($arr[2]);


// 					}
// // -------------------------------------------------------------------------------------------------------------------------------------------------------

		
		

		
// // // -------------------------------------------------------------------------------------------------------------------------------------------------------------
	
// 			$klein->respond('GET', "/index.php", function () {//first instance
    			
// });
// 			$klein->respond('GET', "/index.php/users/all", function () {//second istance
				
// 				users();

// 			});

// 			$klein->respond('GET', "/index.php/users/ene", function () {//third instance
			
// 				ene();

// 			});

// 			$klein->respond('GET', "/index.php/posts/ene/name", function () {//second istance
				
// 				eneName();

// 			});
// 				$klein->respond('GET', "/index.php/posts/ene/pass", function () {//second istance
				
// 				enePass();

// 			});

// 			$klein->dispatch();

				

?>