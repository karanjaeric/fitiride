<!DOCTYPE html>
<head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      
     <link rel="shortcut icon" type="image/png" href="<?php echo base_url()."admin/".$logo->favicon;?>"/>
      <title><?php echo $logo->title;?> <?php echo $page_title;?></title>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
      <!-- custom CSS -->
    
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
       
           <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
     
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      
           <link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">

           <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
           <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
           <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
       
       
   </head>
<body>
<!--HEADER-BAR-->

<input type="checkbox" id="toggle" />
<nav id="site-nav" class="site-nav">
  <div class="container">
 
    <div class="logo"><a href="#"><img src="#"></img></a></div>
    <label class="navBars" for="toggle"> <i class="fa fa-bars"></i> </label>
    <ul id="menu" class="menu">
      <li><a href="Home">Home</a></li>
      <li><a href="printsms">Print Your Ticket</a></li>
      <li><a href="cancellation">Cancel Ticket</a></li>
     <li>
      <?php
                  if(!$this->session->userdata('logged_in')){
      ?>
     <a href="#myModals" data-toggle="modal" data-target="#myModals">Sign In</a></li>
      <li><a href="#myModal" data-toggle="modal" data-target="#myModal">Sign Up</a>
     <?php
               }else{
                  $user =$this->session->userdata('logged_in');
      ?>
     </li>
    </ul>
  </div>

     
              
<!------logged in---------------->
                            
         <div class="dropdown_lis">
            <button onclick="myFunction()" class="dropbtn">Hello <?php echo $user['username'];?>  &nbsp; <i class="fa fa-user"></i></button>        
             
            <div id="tabs" class="dropdown-content">
            <a href="<?php echo base_url();?>myaccount/index"> <i class="fa fa-bookmark"></i>&nbsp; My Trips</a>
            <a href="<?php echo base_url();?>logout"> <i class="fa fa-sign-out"></i>&nbsp; Sign out</a>
            </div>
         </div>  
  <?php
         }
?>
                             <!------logged end---------------->
    </div>
 </nav>  

         <!--HEADER-BAR-END-->
         <!-- Modal -->
         <div class="modal fade" id="myModals" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <button type="button" class="close_lft" data-dismiss="modal">&times;</button>
            <form id="login" data-parsley-validate="">
               <div class="login-block">
                  <h1>Login</h1>
                  <input type="text" name="username" placeholder="Email" class ="username" id="username" required=""/>
                  <input type="password" class="password" name="password" placeholder="Password" id="password" required=""/>
                  
                  
                  
              <input  type="button" value="Login" style="position: relative;" onclick="Login()">
               <br>
                  <div class="small_loader" style="text-align:center;display:none"><img src="<?php echo base_url();?>assets/images/loader-small.gif"></div>
              <div class="login_res" style="text-align:center;"></div>
                  <br>
                  <div class="forgot"><a data-dismiss="modal" href="#myModalf"data-toggle="modal" data-target="#myModalf">Forgot Password?</a></div>
                  <div class="sign_in"><a  data-dismiss="modal" href="#myModal" data-toggle="modal" data-target="#myModal">Sign Up</a></div>
               </div>
            </form>
            </div>
         </div>
         <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <button type="button" class="close_lft" data-dismiss="modal">&times;</button>
            <form id="signup" data-parsley-validate="">
               <div class="login-block">
                  <h1>Sign Up</h1>
                  <input type="email" value=""class ="username" placeholder="Email" name="username"  required/>
              <input class="mobile"  id="signup-username" type="text" name="mob" data-parsley-type="digits" data-parsley-required="true" data-parsley-trigger="change" required required minlength="3"
data-parsley-minlength="3" data-parsley-maxlength="15" placeholder="Mobile">
                  <input type="password" value=""class="password" placeholder="Password" id="dfdfd" name="password" type="password" data-parsley-maxlength="15" data-parsley-minlength="6"required=""/>
                  <input type="password" data-parsley-maxlength="15" data-parsley-minlength="6" data-parsley-equalto="#dfdfd" data-parsley-equalto-message="Password confirmation must match the password." class ="password"  required="" placeholder="Repeat Password" id="password" /><br>
                  <span class="terms_tb">By signing up, you agree to our <a class="cond_tb" href="#">Terms and Conditions.</a></span> <br>
                  <br>
                  
              <input  type="button" value="Sign up" style="position: relative;" onclick="Signup()">
                  <br>
               <div class="small_loader" style="text-align:center;display:none"><img src="<?php echo base_url();?>assets/images/loader-small.gif"></div>
              <div class="signup_res" style="text-align:center;"></div>
                  <br>
                  <div class="account"><a data-dismiss="modal" href="#myModals"data-toggle="modal" data-target="#myModals">Already have an account?</a></div>
                  <div class="sign_in"><a data-dismiss="modal" href="#myModals"data-toggle="modal" data-target="#myModals">Sign In</a></div>
               </div>
            </form>
            </div>
         </div>
      
      
      
          <div class="modal fade" id="myModalf" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <button type="button" class="close_lft" data-dismiss="modal">&times;</button>
             <form id="forgot" data-parsley-validate="">
               <div class="login-block">
                  <h1>Forgot Password</h1>
                  <input type="email" name="email" placeholder="Email" class="username" />
                
                  <span class="terms_tb">By signing up, you agree to our <a class="cond_tb" href="#">Terms and Conditions.</a></span> <br>
                  <br>
                 
              <input  type="button" value="SEND EMAIL" style="position: relative;" onclick="Forgot()">
                  
                  <br>
               <div class="small_loader" style="text-align:center;display:none"><img src="<?php echo base_url();?>assets/images/loader-small.gif"></div>
              <div class="forgot_res" style="text-align:center;"></div>
                  <br>
                  <div class="account"><a href="#">Already have an account?</a></div>
                  <div class="sign_in"><a data-dismiss="modal" href="#myModals"data-toggle="modal" data-target="#myModals">Sign In</a></div>
               </div>
            </form>
            </div>
         </div>
        
<!--SEARCH-BAR-->
         <div class="container" ng-controller="search">
            <div class="fr-search">
               
            <form id="myForm" method="post" data-parsley-validate="" >
                  
                     <h3 class="fr-home" >Online Bus Tickets Booking</h3>
                  <div class="col-sm-4">
                           <label class="inputLabel">From</label>
                           <input id="board_point"  class="XXinput searching" placeholder="Enter a city" type="text"  data-id="board_point" autocomplete="off" data-parsley-error-message="Please select a source city" tabindex="1" required/>
                           <div class="errorMessageFixed"> </div>
                        </div>
                  
                        <span class="switchButton" id="switchButton"></span>
                  
                        <div class="col-sm-4">
                           <label class="inputLabel">To</label>
                           <input id="Destination" class="XXinput searching" placeholder="Enter a city" type="text" tabindex="2" data-id="drop_point"  autocomplete="off" data-parsley-error-message="Please select a destination city" required />
                           <div class="errorMessageFixed"> </div>
                        </div>
                  
                  
                        <div class="col-sm-4">
                           <label class="inputLabel">Date of Journey</label>
                           <span class="blackTextSmall"></span>
                           <input id="Calenderfrom " class="XXinput calendar date-pick  pickup_date pickup_datef Calenderfrom" placeholder="dd-mm-yyyy" readonly type="text" title="Date in the format dd-mmm-yyyy"  tabindex="3" />
                        </div>
                  
                  <div class="col-sm-4">
                       
                           <label class="inputLabel">Date of Return<span class="opt">&nbsp;(Optional)</span></label>
                           <input id="Calenderreturn" class="XXinput calendar date-pick pickup_dater" placeholder="dd-mm-yyyy" type="text" title="Date in the format dd-mmm-yyyy" readonly  tabindex="4" />
                     <div class="dateError">Onward date should be before return date</div>
                     </div>
                     <button class="RB Xbutton" id="searchBtn" ng-click="homesearch()">Search Buses</button>
                 
              </form>
              
               
            </div>
         </div>
         <!--SEARCH-BAR-END-->

      <script src="<?php echo base_url();?>assets/js/js/jquery.js"></script> 
      <script src="<?php echo base_url();?>assets/js/menu.js"></script>
      <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
      <script src="<?php echo base_url();?>assets/js/jquery.raty.js"></script>

</body>






 
        
