 
 <?php
   include('includes/connection.php'); 
   $id= $_GET['del'];

   $q ="DELETE FROM `email` WHERE EmailID = $id";
   $del=mysqli_query($conn, $q);
    if($del){ 
         header("Location:admin.php?page=email");
      }  
      else{
        ?>  
        <script type="text/javascript">
         alert("Sorry Delete Failed Try Again");
        </script>
        <?php
    } 
  
?>