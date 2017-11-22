

<?php
include 'index.php';







        $query='SELECT * FROM department;';
        $result=mysqli_query($db, $query);
?>
<html>
<body>        
 <form method="post" action="capture_data.php" >    
<?php

while($row = mysqli_fetch_array($result))
        {
           echo '<input type="radio" name="department" value="'.$row['name'].'"/>'.$row['name']."</br></br>";

        }
?>
       <input type="submit" name="submit" value="Submit"/>

</form> 
    </body>
 </html>









			













