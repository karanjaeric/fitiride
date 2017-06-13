  
	   <!--HEADER-BAR-->

<input type="checkbox" id="toggle" />
<nav id="site-nav" class="site-nav">
  <div class="container">
 
    <div class="logo"><a href="#"><img src="#"></img></a></div>
    <label class="navBars" for="toggle"> <i class="fa fa-bars"></i> </label>
    <ul id="menu" class="menu nav navbar-nav">
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

 <!--nav here-->
			   
		      <!--HEADER-End of inserted new style
    <div class="container">
			   
		//<?php;
		//				if(!$this->session->userdata('logged_in')){
		//?>
                  <div class="signin_up">
                     <ul>
                        <li><a href="#myModals" data-toggle="modal" data-target="#myModals">Sign In</a>  <span style="color:#f0a2a3;">/</span></li>
                        <li><a href="#myModal" data-toggle="modal" data-target="#myModal">Sign Up</a></li>
                     </ul>
                  </div>
		//<?php
		//			}else{
		//				$user =$this->session->userdata('logged_in');
		//?>;
		-->		  
				  
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

	   
<script>
$(document).ready(function () {
	"use strict";
	var myNav = {
		init: function () {
			this.cacheDOM();
			this.browserWidth();
			this.bindEvents();
		},
		cacheDOM: function () {
			this.navBars = $(".navBars");
			this.toggle = $("#toggle");
			this.navMenu = $("#menu");
		},
		browserWidth: function () {
			$(window).resize(this.bindEvents.bind(this));
		},
		bindEvents: function () {
			var width = window.innerWidth;

			if (width < 600) {
				this.navBars.click(this.animate.bind(this));
				this.navMenu.hide();
				this.toggle[0].checked = false;
			} else {
				this.resetNav();
			}
		},
		animate: function (e) {
			var checkbox = this.toggle[0];

			if (!checkbox.checked) {
				this.navMenu.slideDown();
			} else {
				this.navMenu.slideUp();
			}

		},
		resetNav: function () {
			this.navMenu.show();
		}
	};
	myNav.init();
});
</script>

