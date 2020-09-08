<?php
   
   $id= $_GET['M_Id'];

   $conn=mysqli_connect('localhost','root','','sroms');
   $sql="DELETE FROM mission WHERE M_Id='$id'";
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: bookinglist.php");
   }else{
         echo "Not deleted";
   }
   
?>
