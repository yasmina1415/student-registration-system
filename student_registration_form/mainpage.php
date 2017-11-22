
<?php


include 'index.php';


?>



	<?php

if(isset($_SESSION['user'])){

echo'<form action="logout.php"  method="POST">
	

	<button type="submit" name="logout">Logout</button>
    </form>';


}
else{

echo'
<form action="checklogin.php" method="post">
	<h1>login here!</h1>
	<p>name or email:</br><input type="text" name="name"></input></p>
	<p>password:</br><input type="password" name="password"></input></p>
	<input type="submit" name="login" value="login"></input>
</form>

<br/>
<br/>
<br/>

<form action="checksignup.php" method="post">
	<h1>signup here!</h1>
	<p>name:</br><input type="text" name="name"></input></p>
	<p>email:</br><input type="email" name="email"></input></p>
	<p>password:</br><input type="password" name="password"></input></p>
	<input type="submit" name="signup" value="signup"></input>
    </form>';

}
	?>


	






</body>
</html>
