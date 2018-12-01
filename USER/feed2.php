<?php

	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	

			$errors = [];
			$missing = [];
		    $expected = ['uuid', 'username', 'feedback'];
		    $required = ['uuid', 'username', 'feedback'];

	
	    // ---------------------------------------------------------------------------------------------------------------

	if ( isset($_POST['uuid']) && isset($_POST['username']) && isset($_POST['feedback'])){


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
		        	$uuid = $_POST['uuid'];
			        $username = $_POST['username'];
					$feedback = $_POST['feedback'];

					if(empty($uuid) || empty($username) || empty($feedback)){
						echo "Empty";
			        break;
					}

					else{
				        $var1 = "INSERT INTO users_feed(uuid, Username, Feedback) VALUES('$uuid', '$username', '$feedback')";
						$var2 = $cn->query($var1);

						// echo !$var2 ?  $cn->error :  '<br/><h1>SUCCESS</h1>';

						// echo "<h1>200</h1>";
						if ($var2){
							http_response_code(201);

							$arr = ['Username'=>"$username",'Feedback'=>"$feedback"];
							// echo json_encode($arr);
							echo json_encode(array("message" => "'$username' Your feedback has been submitted."));
						}

							

			        break;
					}
		    }
		}
	}
	?>