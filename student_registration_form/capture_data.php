
<?php 

include 'index.php';



 if(isset($_POST['submit']))
 {

 if(isset($_POST['department']))
 {
    $selected_val = $_POST['department'];
    echo "<h3>You have selected :<h3>" .$selected_val;

$student=$_SESSION['user'];

  $query = "SELECT * FROM department ";
   $result =mysqli_query($db,$query);
  while( $row = mysqli_fetch_assoc($result))
{
if($row['name']== $selected_val){

    $departmentId=$row['ID'];

  $sql = "UPDATE form SET departmentId='$departmentId' WHERE name='$student'";
   $_SESSION['department']= $row['ID'];

     }




 // echo '</br>';
 // echo $_SESSION['department'];
 // echo '</br>';


}
if (mysqli_query($db, $sql)) {
   header('REFRESH:3;URL=courses.php');
} else {
    echo "Error updating record: " . mysqli_error($db);
}

mysqli_close($db);
}
}
  else 
 {
     echo 'No Value Selected';
      mysqli_close($db);
 }



 // $query = "SELECT * FROM form WHERE  name ='$student'";
  // $result =mysqli_query($db,$query);
 // while( $row = mysqli_fetch_assoc($result))
   //$sql="INSERT INTO form (departmentId) values('$selected_val')";
//$row['departmentId']=$selected_val;
//directed me to choose department

  // $student=mysqli_real_escape_string($db,$_POST['department']);
//$_SESSION['department']=$row['departmentId'];
//else{echo"Error:" . $sql . "<br>" . $db->error;}




