



<?php


include 'index.php';

 if(isset($_POST['submit1']))
 {

 if(isset($_POST['course1']))
 {
    $selected_val = $_POST['course1'];
    echo "<h3>You have selected :</h3>" .$selected_val;
$student=$_SESSION['user'];

  $query1 = "SELECT * FROM courses WHERE  1";
   $result1 =mysqli_query($db,$query1);
  while( $row1 = mysqli_fetch_assoc($result1))
{
  if($row1['name']== $selected_val  ){
    $courseID=$row1['ID'];
  }
}


$sql = "UPDATE form SET c1='$courseID' WHERE name='$student'";

if (mysqli_query($db, $sql)) {
  $_SESSION['c1']=$_POST['course1'];
   header('REFRESH:3;URL=courses2.php');
} else {
    echo "Error updating record: " . mysqli_error($db);
}

mysqli_close($db);
}
  else 
 {
     echo 'No Value Selected';
    
 }

}
?>





























 