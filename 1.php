<?php 
  $con=mysqli_connect("localhost","root","","sklep");
    mysqli_query($con, "SET CHARSET utf8");
      $sql="SELECT cena FROM `towary` WHERE nazwa LIKE 'Cienkopis'";
        $result=mysqli_query($con,$sql);
        {
         $i=1;
           while($row=mysqli_fetch_array($result))
           {
           echo "<ul><li>+".$row['nazwa']."+</li></ul>";
          $i++;
        }
      }
   mysqli_close($con);
?>