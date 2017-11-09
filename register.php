<?php
  //PHP SCRIPT GOES HERE
?>


<!DOCTYPE html>
<html>

  <head>

    <!--  BASIC SETUP DO NOT CHANGE -->
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script type="text/javascript" src="../js/materialize.min.js"></script>

    <title>Registration</title>
    <!-- BASIC SETUP DO NOT CHANGE -->

    <style>
      #logo_image{
        height : 100%;
        padding : 4px;
      }
      .registration_title{
        padding: 5px;
        padding-left : 10px;
      }
      .page_container{
      min-height : 80 vh;
      margin-top : 3%;
      }
    </style>

    <script type = "text/javascript" src = "faculty.js"></script>

  </head>

  <body>

  <!-- NAV BAR -->
    <nav>
      <div class = "nav-wrapper teal accent-4">

        <span class = "hide-on-med-and-down">
          <img id="logo_image" class = "brand-logo logo-img-s1" src="../logo.png">
        </span>

        <a href="#" class = "brand-logo center">eThink</a>

      </div>
    </nav>
  <!-- NAV BAR ENDS -->

  <!--CONTAINER STARTS HERE -->

    <div class = "container page_container">

    <!-- REGISTRATION FORM STARTS HERE -->

     <div class = "row">

       <div class = "col s12 l8 offset-l2">

         <div class = "card z-depth-5">

           <div class = "card-title teal accent-4 white-text registration_title z-depth-3">

             <h5>REGISTRATION</h5>

           </div>

           <div class = "card-content">

             <div class = "row">

               <div class = "input-field col s12 l6">

                 <i class = "material-icons prefix">account_circle</i>
                 <input type = "text" id = "faculty_id" class = "validate"/>
                 <label for = "faculty_id">Registration No. </label>

               </div>

               <div class = "input-field col s12 l6">

                 <i class = "material-icons prefix">person_pin</i>
                 <input type = "text" id = "designation" class = "validate"/>
                 <label for = "designation">Aadhar no.</label>

               </div>

             </div>

             <div class = "row">

               <div class = "input-field col s12 l6">

                 <i class = "material-icons prefix">person</i>
                 <input type = "text" id = "first_name" class = "validate"/>
                 <label for = "first_name">Name </label>

               </div>

               <div class = "input-field col s12 l6">

                 <i class = "material-icons prefix">person</i>
                 <input type = "text" id = "last_name" class = "validate"/>
                 <label for = "last_name">Gender </label>

               </div>

             </div>

             <div class = "row">

               <div class = "input-field col s12 l6">

                 <i class = "material-icons prefix">lock</i>
                 <input type = "password" id = "password_1" class = "validate"/>
                 <label for = "password_1">Password</label>

               </div>

               <div class = "input-field col s12 l6">

                 <i class = "material-icons prefix">lock</i>
                 <input type = "password" id = "password_2" class = "validate"/>
                 <label for = "password_2">Retype Password</label>

               </div>

             </div>

             <div class = "row">

               <div class = "input-field col s12 l6">

                 <i class = "material-icons prefix">mail_outline</i>
                 <input type = "email" id = "email" class = "validate"/>
                 <label for = "email">Email</label>

               </div>

               <div class = "input-field col s12 l6">

                 <i class = "material-icons prefix">phone</i>
                 <input type = "tel" id = "phone" class = "validate"/>
                 <label for = "phone">Phone</label>

               </div>

             </div>

             <div class = "row">

               <div class = "input-field col s12 l6">

                 <i class = "material-icons prefix">local_library</i>
                 <input type = "text" id = "department" class = "validate"/>
                 <label for = "department">Department</label>

               </div>

               <div class = "input-field col s12 l6">

                 <i class = "material-icons prefix">account_balance</i>
                 <input type = "text" id = "campus" class = "validate"/>
                 <label for = "campus">Campus</label>

               </div>
               
               </div>
                 <div class = "row">
               
                 <div class = "input-field col s12 l6">

                 <i class = "material-icons prefix">add_location</i>
                 <input type = "text" id = "state" class = "validate"/>
                 <label for = "campus">State</label>

               </div>
               
               <div class = "input-field col s12 l6">

                 <i class = "material-icons prefix">date_range</i>
                 <input type = "text" id = "dob" class = "datepicker"/>
                 <label for = "campus">D.O.B</label>

               </div>
               
               </div>
               
               <div class = "row">
               
               <div class = "input-field col s12 l6">

                 <i class = "material-icons prefix">security</i>
                 <input type = "text" id = "answer1" class = "validate"/>
                 <label for = "campus">Your first school name </label>

               </div>
               <div class = "input-field col s12 l6">

                 <i class = "material-icons prefix">security</i>
                 <input type = "text" id = "answer2" class = "validate"/>
                 <label for = "campus">Name of your best friend</label>

               </div>
               
               </div>
               
               <div class = "row">
               
               <div class = "input-field col s12 l6">

                 <i class = "material-icons prefix">security</i>
                 <input type = "text" id = "answer3" class = "validate"/>
                 <label for = "campus">Famous pet name</label>

               </div>
               <div class = "input-field col s12 l6">

                 <i class = "material-icons prefix">security</i>
                 <input type = "text" id = "answer4" class = "validate"/>
                 <label for = "campus">Favorite cinema actor</label>

               </div>
               </div>
               
               <div class = "row">
               <div class = "input-field col s12 l6">

                 <i class = "material-icons prefix">security</i>
                 <input type = "text" id = "answer5" class = "validate"/>
                 <label for = "campus">Favorite subject in school</label>

               </div>
               </div>
               
                

             </div>

             <div class = "row red-text text-darken-2 center">

               <span id = "registration_err_msg"></span>

             </div>



           </div>

           <div class = "card-action">

             <div class = "row">

               <div class = "col s6 l4">

                  <a class = " waves-effect waves-light white grey-text text-darken-2" href = "../index.php" >Return</a>

                </div>

               <div class = "col s6 offset-s6 l4 offset-l4">

                 <button class = "btn waves-effect waves-light red white-text text-darken-2 submit_button" onClick = "submit_faculty()" ><i class = "material-icons right">send</i>SUBMIT</button>

               </div>

             </div>

             <div class = "row">

               <div class = "progress hide">

                 <div class = "indeterminate"></div>

               </div>

             </div>

           </div>

         </div>

       </div>

     </div>

    <!-- REGISTRATION FORM ENDS HERE -->

    </div>

  <!-- CONTAINER ENDS HERE -->

  </body>

  <!-- TO BE COPIED TO <filename>.js -->
  <script>
  </script>

</html>
