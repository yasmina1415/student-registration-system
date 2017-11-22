
<?php



include 'index.php';




 if (isset($_POST['login'])) {

$usernamelogin = $_POST['name'];
$passwordlogin = $_POST['password'];
//error handler
//check if input is empty
if(empty($usernamelogin)||empty($passwordlogin)){
	echo"empty username or password";
header('REFRESH:2;URL=mainpage.php');
	exit();

}else{
$query = "SELECT * FROM form WHERE  name = '$usernamelogin' or email = '$usernamelogin'"; 
		 

	$result =mysqli_query($db,$query);


	$resultcheck=mysqli_num_rows($result);
		



	if($resultcheck<1  ){ 
			
echo'sign up!';
	header('REFRESH:2;URL=mainpage.php');
	exit();}else{

if($row = mysqli_fetch_assoc($result) ){


	
	if($row['password'] == false){
echo'wrong password';
	header('REFRESH:2;URL=mainpage.php');
	exit();	
}elseif($row['password'] == true){


//login the user here
$_SESSION['user']=$row['name'];
$_SESSION['email']=$row['email'];
$_SESSION['password']=$row['password'];
echo '<h1>welcome!</h1>' . $_SESSION['user'];
header('REFRESH:2;URL=personal.php');
	exit();
}

	}
}


}}

else{

	echo'retry';
	header('REFRESH:2;URL=mainpage.php');
	exit();
}

	















