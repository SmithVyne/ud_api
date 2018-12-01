<?php

	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	

			$errors = [];
			$missing = [];
		    $expected = ['uuid', 'username', 'profession','dob', 'age', 'image'];
		    $required = ['uuid', 'username', 'profession','dob', 'age', 'image'];

			  
	    // ---------------------------------------------------------------------------------------------------------------

	if (isset($_POST['name'])){

			// echo "hello";
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
		        	$phone = $_POST['phone'];
			        $location = $_POST['location'];
					$bio = $_POST['bio'];
			        $name = $_POST['name'];
		        	$uuid = $_POST['uuid'];
					$btaddress = $_POST['btaddress'];
					$dob = $_POST['dob'];
					$sex = $_POST['sex'];
					$image = $_POST['image'];
					

					if(empty($phone) ||empty($location) || empty($bio) || empty($name) || empty($uuid) || empty($btaddress) || empty($dob) || empty($sex) || empty($image)) {
						http_response_code(400);
   						 // tell the user
   						 echo json_encode(array("message" => "Unable to create user. Contains Missing Fields."));
			        break;
					}

					else{
				        $var1 = "INSERT INTO users_data1(phone, location, bio, name, uuid, btaddress, dob, sex, Image) VALUES('$phone', '$location', '$bio', '$name', '$uuid', '$btaddress', '$dob', '$sex', '$image')";
						$var2 = $cn->query($var1);

						// echo !$var2 ?  $cn->error :  '<br/><h1>SUCCESS</h1>';

						// echo "<h1>200</h1>";
					if($var2){
						http_response_code(201);

						$arr = ['Name'=>"$name",'Bio'=>"$bio", 'Sex'=>"$sex"];
						// echo json_encode($arr);

				        // tell the user
				        echo json_encode(array("message" => "User '$name' has been created."));
						}

			        break;
					}
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

			// echo $username;
			// echo $password;

			// }
		

	// }


	// -------------------------------------------------------------------------------//--------------------------------//-------------------------

	// else{
		$arr = ['Name'=>'Godswill@example.com','Password'=>'Okokon'];


			// header('Access-Control-Allow-Origin: *');
			// header('Content-type: application/json');
				// echo json_encode ($arr);
  
			
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