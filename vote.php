<?php
  require_once('connection.php');

  session_start();
  
  if(empty($_SESSION['member_id'])){
    header("location:access-denied.php");
  }
?>

<?php
    
    $positions= mysqli_query($con,"SELECT * FROM tbPositions")
    
    or die("There are no records to display ... \n" . mysqli_error($con)); 
    echo "jqwd";
  ?>
  <?php
    
     if (isset($_POST['Submit']))
     {
       
       $position = addslashes( $_POST['position'] ); 
       
       
       $result = ("SELECT * FROM tbCandidates WHERE candidate_position='$position'")
       or die(" There are no records at the moment ... \n"); 
     
     }
     else
     // do something
     echo "jqwd";
  
?>
