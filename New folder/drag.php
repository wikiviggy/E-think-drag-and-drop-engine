<!DOCTYPE HTML>
<html>
<head>
<title>pick and place </title>
 <meta name="viewport" content="width=device-width, initial-scale=1">      
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <link rel="stylesheet" href="css/materialize.min.css">  
<style>
.divbox{
    float: left;
    width: 300px;
    height: 95px;
    margin: 10px;
    padding: 10px;
    border: 2px solid black;
    border-radius:5px;
}

.binbox{
    width: 50%;
    height: 500px;
    border: 4px solid black;
    border-radius:5px;
}
.box
   {
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  
</style>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}



</script>
    <?php 
  $servername = 'localhost';
  $username = 'root';
  $password = 'ubuntu';
  $dbname = 'learning';
  $question=[];
  $q_id =[];
  $options_no=[];
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   } 

  $sql = "SELECT q_id,question,options_number,option1,option2,option3,option4,option5,option6,option7,option8,option9,option10,bin1,bin2 FROM drag";
  $result = mysqli_query($conn, $sql);
  $i=0;
  $bin1=[];
  $bin2=[];
  $option=[];
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result) ) {
          $q_id[$i]=$row['q_id'];
          $question[$i]=$row["question"];
          $options_no[$i]=$row['options_number'];
          $option[$i][1]=$row['option1'];
          $option[$i][2]=$row['option2'];
          $option[$i][3]=$row['option3'];
          $option[$i][4]=$row['option4'];
          $option[$i][5]=$row['option5'];
          $option[$i][6]=$row['option6'];
          $option[$i][7]=$row['option7'];
          $option[$i][8]=$row['option8'];
          $option[$i][9]=$row['option9'];
          $option[$i][10]=$row['option10'];
          $bin1[$i]=$row['bin1'];
          $bin2[$i]=$row['bin2'];
          $i++;
    }

   } 
  else {
      echo "0 results";
  }
  $number_of_questions=sizeof($q_id);
  $conn->close();
?>
</head>
<body class="blue lighten-5">
<div class="container">
     
  <ul id="tabs-swipe" class="tabs">
    <li class="tab col s3"><a class="active" href="#test-swipe-1">Create</a></li>
    <li class="tab col s3"><a href="#test-swipe-2">Pre-view</a></li>
  </ul>
  <div id="test-swipe-1">
     <div class="card">
         <div class ="card-content">
           <div class ="row">
             <div class="col s12">
                <div class="row">
                  <div class="input-field col s5">
                      <input placeholder="1-10" id="op_number" type="number" class="validate">
                      <label for="op_number">Number of options: </label>
                  </div>
                </div>
              <?php $j=1; for($j=1;$j<=10;$j++)
                { ?>
                <div class="row">
                  <div class="input-field col s10">
                      <input placeholder="option <?php echo $j; ?>" id="op<?php echo $j; ?>" type="text" class="validate">
                      <label for="op<?php echo $j; ?>">Option <?php echo $j; ?> </label>
                  </div>
                       <div class="binchecks col s2" id="bincheck">
                           <input class="bincheck" type="checkbox" id="indeterminate-checkbox<?php echo $j;?>" /><label for="indeterminate-checkbox<?php echo $j;?>">bin1</label>
                           <input class="bincheck" type="checkbox" id="indeterminate-checkbox<?php echo $j+19;?>" /><label for="indeterminate-checkbox<?php echo $j+19;?>">bin2</label>
                       </div>
                </div>  
               <?php } ?>
             <div class="row">
              <div class=" col s12">
              <button class="btn waves-effect waves-light" type="submit" name="submit" onClick="submitfunc()">Submit
               <i class="material-icons right">send</i>
              </button>
           </div>
           </div>
           </div>
        </div>
     </div>
  </div>
</div>
 <div id="test-swipe-2" class="col s12 card">
     <?php  for ($j=0;$j<$number_of_questions;$j++){ ?>
     <div class ="row">
      <div class="col s12">
     <h2><center>Pick and place</center></h2>
     <p><h5>Drag the options and place in bin:</h5></p>
     <h6><?php echo $question[$j]; ?></h6>
     <br>
   <div class="row col s12 box" style="height:350px;" id="draggable" ondrop="drop(event)" ondragover="allowDrop(event)">
    
  <?php
   $num=$options_no[$j];
    
    for ($i=1;$i<=$num;$i++) { $id1="$i".$q_id[$j];
       ?> 
          <div class="divbox card" id="div<?php echo $id1;?>" draggable="true" ondragstart="drag(event)">
           <div id="option<?php echo $id1;?>" width="200" height="310"> <?php echo $option[$j][$i];?> </div>
       </div>
   <?php }?>
   </div>
     <p><h5>Place in one of the bins: </h5><p>
     <div class="row col s12" id="bins">
       <div class="col s5 binbox card" style="float:left;" id="bin1<?php echo $q_id[$j];?>" ondrop="drop(event)" ondragover="allowDrop(event)"> </div>
       <div class="col s5 binbox card" style="float:right;" id="bin2<?php echo $q_id[$j];?>" ondrop="drop(event)" ondragover="allowDrop(event)"> </div>
     </div>
      <button class="btn waves-effect waves-light" id="<?php echo $q_id[$j];?>" type="submit" onclick="readDropZone(this.id)" id="action">Submit
      <i class="material-icons right">send</i>
      </button>
     <div id="replace<?php echo $q_id[$j];?>"> </div>
     <br><br>
     <hr>
     <?php } ?>
   
 </div>
</div>
</div>
</div>
<script type="text/javascript">
     function submitfunc()
    {
      var op_no = $("#op_number").val();
      var bin1 = [];
    	var x =1;
    	for(x=1;x<=10;x++)
    	      {
    		bin1[x]="";
    		name_string = "indeterminate-checkbox"+x;
    		  if($("#"+name_string).is(':checked')){
    		    bin1[x] += "1";
    		  }
    		  else{
    		    bin1[x] += "0";
    		  }
    		}
        var x =20;
        var bin2 =[];
    	for(x=20;x<30;x++)
    	      {
    		bin2[x]="";
    		name_string = "indeterminate-checkbox"+x;
    		  if($("#"+name_string).is(':checked')){
    		    bin2[x] += "1";
    		  }
    		  else{
    		    bin2[x] += "0";
    		  }
    		}
      
      console.log(bin1, bin2);
      var op_num=$("#op_number").val();
      var op1=$("#op1").val();
      var op2=$("#op2").val();
      var op3=$("#op3").val();
      var op4=$("#op4").val();
      var op5=$("#op5").val();
      var op6=$("#op6").val();
      var op7=$("#op7").val();
      var op8=$("#op8").val();
      var op9=$("#op9").val();
      var op10=$("#op10").val();
      var b1=''; 
      var b2='';
      for (var x=1; x<=10;x++)
      { if(bin1[x]=='')
           {continue;}
        else
         {b1=b1+bin1[x];}
      }
      for (var x=20; x<30;x++)
      { if(bin2[x]=='')
           {continue;}
        else
           {b2=b2+bin2[x];}
      }
      console.log(b1,b2);
      var formdata = {
        "op_number": op_num,
        "op1" : op1,
        "op2" : op2,
        "op3" : op3,
        "op4" : op4,
        "op5" : op5,
        "op6" : op6,
        "op7" : op7,
        "op8" : op8,
        "op9" : op9,
        "op10" : op10,
        "bin1" : b1,
        "bin2" : b2
      }
      
      $.ajax({ type : "POST" ,
               url : "drag_insert.php",
               data : formdata,
               success : function(){
                   alert('inserted!')
                   }

      }); 
      $(document).ready(function(){
     location.reload();
     $('ul.tabs').tabs('select_tab', 'test-swipe-2');
    });
    
 }
     function _(id){
   return document.getElementById(id);	
     }
   

/* swipe 2 */
    function readDropZone(id)
{   var qid=<?php echo json_encode($q_id);?>;
    var q_id=id;//getting id from button as it contains the q_id
    var index;
    for( var a=0; a<qid.length; a++)
     { if(qid[a]==q_id)
           { index=a; }
      }
   console.log(id,index);
    var correct=[];
    for(var i=0; i < _("bin1"+q_id).children.length; i++){
        var c=_("bin1"+q_id).children[i].id;
        var d= document.getElementById(c);
        //alert(d.textContent);
        correct[i]=d.textContent;
        //alert(_("bin1").children[i].id+" is in the first bin");
    }
     var incorrect=[];
    for(var i=0; i < _("bin2"+q_id).children.length; i++){  
        var c=_("bin2"+q_id).children[i].id;
        var d= document.getElementById(c);
        incorrect[i]=d.textContent;
    } 
    var option = <?php echo json_encode($option); ?>;
    var no_of_options = <?php echo json_encode($options_no); ?>;
    var answer_bin1 = <?php echo json_encode($bin1); ?>;
    var answer_bin2 = <?php echo json_encode($bin2); ?>;
    var user_bin1=[];
    var user_bin2=[];
    for( x=1;x<=no_of_options[index];x++)
     {  user_bin1[x-1]='0';
      for (y=0;y<correct.length;y++)
         {  //.trim()
           if((option[index][x].toString().trim())==(correct[y].toString().trim()))
              {  user_bin1[x-1]='1'; 
               }
         }
     }
    for( x=1;x<=no_of_options[index];x++)
     {  user_bin2[x-1]='0';
      for (y=0;y<incorrect.length;y++)
         { if((option[index][x].toString().trim())==(incorrect[y].toString().trim()))
              {user_bin2[x-1]='1';}
         }
     }
   var user_bin_1="",user_bin_2="";
    for( x=no_of_options[index];x<10;x++)
       {   user_bin1[x]='0'; user_bin2[x]='0';}
    for(x=0;x<user_bin1.length;x++)
    { 
    user_bin_1+=user_bin1[x];
      }
    for( x=0; x<user_bin2.length;x++)
     {user_bin_2+=user_bin2[x];
     }
   var result_string='';
          result_string = result_string + "<div class = \"card\"><div class = \"card-content\">";
    	  result_string = result_string + "<div class = \"row\">";
    	  result_string = result_string + "<p id = \"user_correct_answer\"><b> Your Answer for correct bin: </b>" +correct+ "</p>";
    	  result_string = result_string + "</div>";
          result_string = result_string + "<div class = \"row\">";
    	  result_string = result_string + "<p id = \"user_incorrect_answer\"><b> Your Answer for incorrect bin: </b>" +incorrect+ "</p>";
    	  result_string = result_string + "</div>";
    	  
   if((answer_bin1[index].toString().trim()==user_bin_1.toString().trim()) && (answer_bin2[index].toString()==user_bin_2.toString().trim()))
     {    result_string = result_string + "<div class = \"card green lighten-2 \"><div class = \"card-content\">";
    	  result_string = result_string + "<div class = \"row\">";
    	  result_string = result_string + "<p id = \"user_answer\"><b> Your Answer is correct !!</b></p>";
    	  result_string = result_string + "</div>";
     }
   else{ result_string = result_string + "<div class = \"card red lighten-2 \"><div class = \"card-content\">";
    	  result_string = result_string + "<div class = \"row\">";
    	  result_string = result_string + "<p id = \"user_answer\"><b> Answer is wrong..</b></p>";
    	  result_string = result_string + "</div>";
     }
          result_string = result_string +"</div></div>";
    	  $("#replace"+q_id).html(result_string);

    
}
    </script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
    

</body>
</html>

