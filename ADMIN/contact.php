<?php
   
include ('../includes/connection.php'); 
if (isset($_POST['comment_n'])){
$EmailID = $_POST['Email']; 
$SenderID = $_POST['roll_number']; 
$Subject = $_POST['Subject']; 
$RecipientID = $_POST['RecipientID']; 
$Body = $_POST['comment']; 


$assessor=mysqli_query($conn,"INSERT INTO `email`(`EmailID`, `SenderID`, `RecipientID`, `Subject`, `Body`) VALUES ('$EmailID','$SenderID','$RecipientID','$Subject','$Body')");
  
  if($assessor){ 
         $msg = "Your message has been sent. Thank you!";
      }  
      else{
        $msg = " Sorry your message fail Try again!";
    }
  } 
?>

<?php
   
include ('includes/connection.php'); 
if (isset($_POST['comment_n'])){
$EmailID = $_POST['Email'];  
$Subject = $_POST['Subject']; 
$RecipientID = $_POST['RecipientID']; 
$Body = $_POST['comment']; 


$assessor=mysqli_query($conn,"INSERT INTO `email`(`EmailID`,   `RecipientID`, `Subject`, `Body`) VALUES ('$EmailID', '$RecipientID','$Subject','$Body')");
  
  if($assessor){ 
    $msg = "
     ?>
         <script type='text/javascript'>
             alert('Your message has been sent. Thank you');
         </script>
      <?php "; 
      }  
      else{
        $msg = "
         ?>
         <script type='text/javascript'>
             alert('Sorry your message fail Try again!');
         </script>
        <?php 
        "; 
    }
  } 
?>
