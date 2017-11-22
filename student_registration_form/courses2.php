
<?php
include 'index.php';


        ?>

<html>
<body>        
 <form method="post" action="capture_courses2.php" >    
<?php

$query1='SELECT * FROM courses';
  $result1=mysqli_query($db, $query1);
while($row1 = mysqli_fetch_array($result1))
        {if(($row1['departmentId']==$_SESSION['departmentId']) && ($row1['ID']!=$_SESSION['c1Id']) ){
            echo '<h3><input type="radio" name="course2" value="'.$row1['name'].'"/></h3>'.$row1['name'];
            echo "</br>";
        }
}
        
?>
       <input type="submit" name="submit2" value="Submit"/>