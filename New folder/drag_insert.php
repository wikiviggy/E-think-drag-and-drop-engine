<?php 
    $servername = 'localhost';
    $username = 'root';
    $password = 'ubuntu';
    $dbname = 'learning';
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if($conn->error){
    die("Unsuccessful" . $conn->error);
  }
 // $data= array();
  $op_no = $_POST['op_number'];
  $op1=$_POST['op1'];
  $op2=$_POST['op2'];
  $op3=$_POST['op3'];
  $op4=$_POST['op4'];
  $op5=$_POST['op5'];
  $op6=$_POST['op6'];
  $op7=$_POST['op7'];
  $op8=$_POST['op8'];
  $op9=$_POST['op9'];
  $op10=$_POST['op10'];
  $bin1=$_POST['bin1'];
  $bin2=$_POST['bin2'];
  $q_id=mt_rand($op_no,1000);
  $question="Drag the answers into the bin";    
  $sql = "INSERT INTO drag (q_id,question,options_number,option1,option2,option3,option4,option5,option6,option7,option8,option9,option10,bin1,bin2) VALUES($q_id,'$question','$op_no','$op1','$op2','$op3','$op4','$op5','$op6','$op7','$op8','$op9','$op10','$bin1','$bin2')";
  $result = mysqli_query($conn, $sql); 
  // echo json_encode($data);
  $conn->close();
?>
