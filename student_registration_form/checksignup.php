
<?php	


include 'index.php';





//after filteration 
// if(empty($username)){echo 'email should not be empty';
// header('REFRESH:2;URL=mainpage.php'); die();}

// 	if(empty($password)){echo 'password should not be empty';
// header('REFRESH:2;URL=mainpage.php');}

// 		if(empty($email)){echo 'username should not be empty';
// header('REFRESH:2;URL=mainpage.php');}



//make variables of database attributes
			$host='localhost';
			$dbusername = 'root';
			$dbpassword = '';
			$dbname = 'college_project1';
//connection
			$db=new mysqli($host , $dbusername ,$dbpassword ,$dbname);
//check connection
			if($db->connect_errno){ die('sorry , we have some problems');  
			echo "</br>";}


//check attributes of the database
			else{
			if (isset($_POST['signup'])) {
					$usernamesignup = $_POST['name'];
					$emailsignup = $_POST['email'];
					$passwordsignup = $_POST['password'];
					$query = "SELECT * FROM form WHERE  name = '$username' or email = '$username'"; 
  		      //check if the name is not exist
			if(mysqli_num_rows(mysqli_query($db,$query)) > 0){	

					echo 'the account is already exist';
					header('REFRESH:2;URL=mainpage.php');
												//login 
					}

        else {  $sql="INSERT INTO form (name , password , email) values('$usernamesignup' , '$passwordsignup' , '$emailsignup')";
				if($db->query($sql)){ 
	//make session
	$_SESSION['user']=$usernamesignup;
	$_SESSION['email']=$emailsignup;
	$_SESSION['password']=$passwordsignup;

				//directed me to choose department
	header('REFRESH:2;URL=choose department.php');
						}
		else{echo"Error:" . $sql . "<br>" . $db->error;}
					}
						}

		
}



