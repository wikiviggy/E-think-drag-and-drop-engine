<!DOCTYPE HTML>
<html>
 <head>
  <title>Ordering</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">      
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="css/materialize.min.css">  
  <?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'ubuntu';
    $dbname = 'learning';
    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->error){
      die("Connection Unsuccessful" . $conn->error);
    }
    $query = "SELECT * FROM ordering";
    $result = mysqli_query($conn, $query);
   ?>
   <style>
   .box
   {
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  
  </style>
 </head>
 <body>
  <div class="container">
     <div class="card box">
       <h3>Ordering Elements:</h3>
       <p>Order the elements according to the periodic table</p>
       <ul id="sortable1" class="connectedSortable">
       <?php
         $i=1;
         $od="order";
         $option_arr=array();
         while($row = mysqli_fetch_assoc($result) )
         { $options=$row['options_number'];
           while($i<=$options)
           {
           $option_arr[$i-1]=$row["$od"."$i"];
           $i++;
           }
         }
         $answer=$option_arr;
         shuffle($option_arr);
         for ($i=0;$i<$options;$i++){
          echo '<li id="$i" class="box" >'.$option_arr[$i].'</li>'; 
          }
         $conn->close();
       ?>
       </ul>
       
    <button class="btn waves-effect waves-light" type="submit" name="submit" onClick="submitfunc()">Submit<i class="material-icons right">send</i>
    </button>
     <div id="replace"></div>
    </div>
  </div>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script>
var result="";
$("#sortable1" ).sortable({
    connectWith: ".connectedSortable",
    stop: function(event, ui) {
        $('.connectedSortable').each(function() {
            result = "";
            $(this).find("li").each(function(){
                result += $(this).text() + ",";
            });
            
            
        });
    }
    
});
function submitfunc()
{ var option_arr=[];
  var correct_arr=[];
  var user_answer='';
  option_arr=<?php echo json_encode($option_arr); ?>;
  correct_arr=<?php echo json_encode($answer); ?>;
  var res="";
  for (var i=0; i< option_arr.length; i++)
   {  res+=option_arr[i]+",";
    }
  if(result!='')
  { user_answer=result;
  }
  else
  {user_answer=res;
  }
  correct_arr+=",";
 var result_string='';
          result_string = result_string + "<div class = \"card\"><div class = \"card-content\">";
    	  result_string = result_string + "<div class = \"row\">";
    	  result_string = result_string + "<p id = \"user_correct_answer\"><b> Your Answer: </b>" +user_answer+ "</p>";
    	  result_string = result_string + "</div>";
          result_string = result_string + "<div class = \"row\">";
    	  result_string = result_string + "<p id = \"correct_answer\"><b>Correct Answer: </b>" +correct_arr+ "</p>";
    	  result_string = result_string + "</div>"; 
 if(correct_arr==user_answer)
  {     // alert('correct!'); 
          result_string = result_string + "<div class = \"card green lighten-2 \"><div class = \"card-content\">";
    	  result_string = result_string + "<div class = \"row\">";
    	  result_string = result_string + "<p id = \"user_answer\"><b> Your Answer is correct !!</b></p>";
    	  result_string = result_string + "</div>";      
  }
  else { //alert('wrong');
          result_string = result_string + "<div class = \"card red lighten-2\"><div class = \"card-content\">";
    	  result_string = result_string + "<div class = \"row\">";
    	  result_string = result_string + "<p id = \"user_answer\"><b> Answer is wrong..</b></p>";
    	  result_string = result_string + "</div>";

        }
 result_string = result_string +"</div></div>";
 $("#replace").html(result_string);
 
}

</script>
 </body>
</html>
  
