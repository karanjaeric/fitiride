 <?php include_once("header.php");?>


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



         <script src="<?php echo base_url();?>assets/js/jquery.js"></script> 
      <script src="<?php echo base_url();?>assets/js/menu.js"></script>
 
	  
	  
      <script src="<?php echo base_url();?>assets/js/jquery-ui.js" ></script>
      <script src="<?php echo base_url();?>assets/js/footer.js" ></script>
	   
   <script src="<?php echo base_url();?>assets/js/jquery.raty.js"></script>

         </body>

