<?php
	
	if(isset($_POST['register'])){

		require_once 'connection.php';

		$name=$_POST['name1'];
		$phone_number=$_POST['phone_number'];
		$email=$_POST['email'];
		$subject=$_POST['sub'];
		$message=$_POST['message'];

		if(empty($name) || empty($email) || empty($phone_number) || empty($message)){

			header("Location: ../views/cantact.php?error=emptyfields&name=".$name."&email=".$email."phone_number".$phone_number."subject".$subject."message".$message);
			exit();
		}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			header("Location: ../views/cantact.php?error=emailerror&name=".$name."phone_number".$phone_number."subject".$subject."message".$message);
			exit();
		}
		else{

			try{
				$insert_sql="INSERT INTO users (name,phone_number,email,subject,message) VALUES (?,?,?,?,?)";

				$insert_stmt=$conn->prepare($insert_sql);

				$insert_stmt->bind_param("sssss",$name,$phone_number,$email,$subject,$message);
				$result=$insert_stmt->execute();

				if(!$result){
					echo $insert_stmt->error;
				}
				$insert_stmt->close();
				$conn->close();
				
				header("Location: ../index.php?submiteddetails=successfull");
				exit();
			}
			catch(mysqli_sql_exception $e){
				echo $e->getMessage();
			}	
		}
	}

	else{
		header("Location: ../views/cantact.php");
		exit();
	}

?>