<?php

include 'index.php';

$query = "SELECT * FROM form WHERE 1";
   $result =mysqli_query($db,$query);
  while( $row = mysqli_fetch_assoc($result))
{if ($row['name']==$_SESSION['user']){
   $_SESSION['user'] = $row['name'];
   $_SESSION['departmentId']= $row['departmentId'];
   $_SESSION['c1Id']= $row['c1'];
$_SESSION['c2Id']=$row['c2'];}
}
$query1 = "SELECT * FROM courses WHERE 1";
   $result1 =mysqli_query($db,$query1);
  while( $row1 = mysqli_fetch_assoc($result1))
{if ($row1['ID']==$_SESSION['c1Id']){
 
   $_SESSION['c1']= $row1['name'];
}
}


$query2 = "SELECT * FROM courses WHERE 1";
   $result2 =mysqli_query($db,$query2);
  while( $row2 = mysqli_fetch_assoc($result2))
{if ($row2['ID']==$_SESSION['c2Id']){
 
   $_SESSION['c2']= $row2['name'];
}
}



$query3 = "SELECT * FROM department WHERE 1";
   $result3 =mysqli_query($db,$query3);
  while( $row3 = mysqli_fetch_assoc($result3))
{if ($row3['ID']==$_SESSION['departmentId']){

   $_SESSION['department']= $row3['name'];
  }
}


echo"<h1>welcome</h1> " .$_SESSION['user'] . "</br>";

echo "<h1>your department is:</h1> " . $_SESSION['department'] . "</br>";

echo "<h1>your courses are  :</h1>". $_SESSION['c1'] . "</br>";

echo $_SESSION['c2'];

?>

<a href="choose department.php"><h3>change department or courses?</h3></a>


<form action="logout.php"  method="POST">
	<button type="submit" name="logout">Logout</button>
    </form>';
