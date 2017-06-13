 <div ng-controller="search" ng-init="getUrlparameterPayment()"><div class="out_gal">

 <div class="container" >
         <div class="row"style="min-height:25px;margin-top:120px;" ng-hide="Twowaypaymentdetails.length !='0'">
            <div class="col-md-4">
               <div class="rb_directionn2">
                  <div class="rb_directionn">&nbsp;</div>
                  <div class="rb_directionn1" style="border-right:3px solid #eeeeee;">
                     <div class="tb_align">
                        <span class="tb_from">{{board_points}}</span>
                        <span class="tb_arrow"><img src="<?php echo base_url();?>assets/images/arrow-right.png"></span>
                        <span class="tb_to">{{drop_points}}</span>
                     </div>
                     <div class="tb_align">
                        <span class="tb_from2"></span>
                        <span class="tb_arrow2">{{dates | date:'dd-MMM-yyyy '}}</span>
                        <span class="tb_to2"></span>
                     </div>
                  </div>
                  &nbsp;
               </div>
            </div>
            <div class="col-md-4">
               <div class="rb_directionn2">
                  <div class="rb_directionn">&nbsp;</div>
                  <div class="rb_directionn1">
                     <div class="tb_align_lft">
                        <div class="tb_Corporation">
						{{Onewaypaymentdetails[0].pickup_point}},{{Onewaypaymentdetails[0].board_time}} <br>
						Seat no(s):{{oseat_no}}

                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="rb_directionn2">
                  <div class="rb_directionn">&nbsp;</div>
                  <div class="rb_directionn1" style="border-left:3px solid #eeeeee;">
                     <img src="<?php echo base_url();?>assets/images/pearl.png">
                     <div class="tb_Corporation">
                        {{Onewaypaymentdetails[0].bus_name}}
                     </div>
                  </div>
               </div>
            </div>




         </div>

		 </div>
		  </div>







		         <div class="row topmar" ng-show="Twowaypaymentdetails.length !='0'">
            <div class="col-md-6" style="border-right:3px solid #eeeeee;">

				<div class="tb_margin">
                 <div class="rb_directionn2 ">
                  <div class="rb_directionn">&nbsp;</div>
                  <div class="rb_directionn1 ">
                     <div class="tb_align">
                        <span class="tb_from">{{board_points}}</span>
                        <span class="tb_arrow"><img src="<?php echo base_url();?>assets/images/arrow-right.png"</span>
                        <span class="tb_to">{{drop_points}}</span>
                     </div>
                     <div class="tb_align">
                        <span class="tb_from2"></span>
                        <span class="tb_arrow2">{{dates | date:'EEE,dd-MMM-yyyy '}}</span>
                        <span class="tb_to2"></span>
                     </div>
                  </div>
                  &nbsp;
               </div>

					      <div class="rb_directionn1 topbot">
                     <img src="<?php echo base_url();?>assets/images/pearl.png">
                     <div class="tb_Corporation">
                       {{Onewaypaymentdetails[0].bus_name}}
                     </div>
                  </div>

					    <div class="rb_directionn1">
                     <div class="tb_align_lft">
                        <div class="tb_Corporation lefft">
                          {{Onewaypaymentdetails[0].pickup_point}},{{Onewaypaymentdetails[0].board_time}} <br>
						Seat no(s):{{oseat_no}}<br>
						{{dates | date:'EEE,dd-MMM-yyyy '}}
                        </div>
                     </div>
                  </div>

					</div>

            </div>

            <div class="col-md-6">
				<div class="tb_margin">
                    <div class="rb_directionn2 lefft">
                  <div class="rb_directionn">&nbsp;</div>
                  <div class="rb_directionn1 ">
                     <div class="tb_align">
                        <span class="tb_from">{{drop_points}}</span>
                        <span class="tb_arrow"><img src="<?php echo base_url();?>assets/images/arrow-right.png"</span>
                        <span class="tb_to">{{board_points}}</span>
                     </div>
                     <div class="tb_align">
                        <span class="tb_from2"></span>
                        <span class="tb_arrow2">{{Returndates | date:'EEE,dd-MMM-yyyy '}}</span>
                        <span class="tb_to2"></span>
                     </div>
                  </div>
                  &nbsp;
               </div>

					      <div class="rb_directionn1 topbot">
                     <img src="<?php echo base_url();?>assets/images/pearl.png">
                     <div class="tb_Corporation">
                        {{Twowaypaymentdetails[0].bus_name}}

                     </div>
                  </div>

					    <div class="rb_directionn1">
                     <div class="tb_align_lft">
                        <div class="tb_Corporation lefft">
                          {{Twowaypaymentdetails[0].pickup_point}},{{Twowaypaymentdetails[0].board_time}} <br>
						Seat no(s):{{Rseat_no}}<br>
						{{Returndates | date:'EEE,dd-MMM-yyyy '}}
                        </div>
                     </div>
                  </div>
            </div>
         </div>
				</div>
			 <div class="bag_gal">
			 <div class="container">
         <div class="row" style="margin-top:30px;">
            <div class="col-md-9">
               <div class="pay_inner">
			   <form id="userForm" >
                        <div class="pay_inner1">

                  <div class="rb_nam" ng-repeat="i in counter(numberss) track by $index">
                     <div class="rb_name1">
                        <span class="name_tbb">Name</span><span class="star_tb">*</span>&nbsp;
                        &nbsp;<input type="text" name="name[]"  class="passenger left"placeholder="Enter Passenger Name" data-parsley-pattern="^[a-zA-Z\  \/]+$" required>
                     </div>

                     <div class="rb_name2">   <span class="name_tbb">Age</span> <span class="star_tb">*</span> &nbsp;  &nbsp; <input type="text" min="18" max="60"  name="age[]" class="rb_age" placeholder="Age"  data-parsley-type="digits"  required></div>
                     <div class="rb_name3" >

                        <span class="name_tbb">Gender</span><span class="star_tb">*</span>&nbsp;
                        &nbsp; <input type="radio" class="tb_dender" value="male" name="gemder[{{$index}}]" required><label class="tb_gender">M</label> &nbsp;&nbsp;
                        <input type="radio" name="gemder[{{$index}}]" value="female"><label  class="tb_gender">F</label>
                     </div>
					 <br>
                     <br>

                      </div>


                   <div class="rb_nam rb_names">
                    <div class="rb_name1">
                        <span class="name_tbb">Mobile</span><span class="star_tb">*</span>&nbsp;
                        &nbsp;<input type="text" name="mobile" class="passenger"placeholder="Enter Mobile No" data-parsley-type="digits" required>
                    </div>
                     <div class="rb_name2_lft">   <span class="name_tbb"> &nbsp;
                         &nbsp;
                         &nbsp;
                         &nbsp; &nbsp;&nbsp;Email</span> <span class="star_tb">*</span> &nbsp;  <input type="email" name="email" class="rb_age1"placeholder="Ticket will be sent to this mail ID" required>
						  <input type="hidden" name="oamount" value="{{Onewaypaymentdetails[0].fare*numberss}}">
						  <input type="hidden" name="obus_id" value="{{Onewaypaymentdetails[0].bus_id}}">
						  <input type="hidden" name="orout_id" value="{{oroute_id}}">
						  <input type="hidden" name="oboarding_point_id" value="{{oboard_id}}">
						  <input type="hidden" name="Ramount" value="{{Twowaypaymentdetails[0].fare*numberss}}">
						  <input type="hidden" name="Rbus_id" value="{{Twowaypaymentdetails[0].bus_id}}">
						  <input type="hidden" name="Rrout_id" value="{{Rroute_id}}">
						  <input type="hidden" name="Rboarding_point_id" value="{{Rboard_id}}">
						  <input type="hidden" name="booking_date" value="{{dates | date:'dd-MM-yyyy '}}">
						  <input type="hidden" name="Rbooking_date" value="{{Returndates | date:'dd-MM-yyyy '}}">
						  <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('logged_in')['id'];?>">
						  <input type="hidden" name="0seat_no" value="{{oseat_no}}">
						  <input type="hidden" name="Rseat_no" value="{{Rseat_no}}">
						  </div>

                      </div>
                   <input type="button" value="save" id="Customerdetails" onClick="userDetails()" style="display:none;">
                   <br>
               <br>

               </div>
                   </form>
                </div>




            </div>
            <div class="col-md-3">
                <div class="pay_outer">
               <div class="payment">Payment Summary</div>

               <hr class="top">
               </hr>
               <div class="payment_all">
                  <div class="payment_sum">
                     Onward Fare
                  </div>
                  <div class="payment_sum2">
                     KES.{{Onewaypaymentdetails[0].fare}} * {{numberss}}
                  </div>
               </div>
             </div>
               <div class="pay_outer">
               <div class="payment_all" style="border-top:1px dotted #bbb;" ng-hide="dateR=='undefined'">
                  <div class="payment_sum">
                     <div class="offer"> Return Fare</div>
                  </div>
                  <div class="offer">
                     KES.{{Twowaypaymentdetails[0].fare}} * {{numberss}}
                  </div>
               </div>
             </div>
                  <div class="pay_outer">
               <div class="payment_all" style="border-top:1px dotted #bbb;">
                  <div class="payment_sum">
                     <div class="payment_sum" style="font-weight:600;">Total</div>
                  </div>
                  <div class="payment_sum2" style="font-weight:600;">
                     KES.{{totals}}
                  </div>
               </div>

              </div>
            </div>



         </div>
		 </div></div>
		 <div class="container" style="display:none;">

			   <div class="row">
			       <div class="account_outer">
                     <input type="checkbox"><label class="account_offer">I have an account offer code</label>
                  </div>

			   </div>
		   </div>
		   <div class="container">
         <div class="row">
            <div class="col-md-11">
               <div class="pay_inner">
                  <div class="pay_details">Payment Details</div>
                  <ul class="tabs" style="margin-top:25px;">
                     <li class="tab-link current" data-tab="tab-4" data-id="paypal">Mpesa</li>
                     <!--li class="tab-link" data-tab="tab-5" data-id="paytm">Paytm</li-->
                     <!--li class="tab-link" data-tab="tab-6" data-id="paytm">Debit card</li>
                     <li class="tab-link" data-tab="tab-7" data-id="paytm">Net Banking</li-->
                  </ul>
                  <div class="tab-content current"  id="tab-4" >
                     <div class="rupee_lft">&nbsp;</div>
                     <div class="tb_route_inner_txt low ">
                        <div class="tb_route_inner">
                           <div class="amount_pay">
                              <div class="amount_pay1">
                                 &nbsp;
                              </div>
                              <div class="amount_pay2 amt_pay">
                                 <div class="amount_pay2_tb">
                                    <span class="tb_pay">Amount Payable:</span>  <span class="tb_pay1">KES.{{totals}}.00</span>
                                 </div>
                                 <br>

                                  <!-- promo code Management script created by Anju MS on 08-12-2016-->
                                  <!-- start -->

                                 </div>
                                 <!-- end -->

                                 <div class="rupees"> <img src="<?php echo base_url();?>assets/images/mpesa.png"><span class="get_off">  <br>
                                    <span class=" PayUMoney" >100% Secure Payments through Mpesa</span>
                                    </span><br>
                                    </span>
                                 </div>


								  <!-- <form   ng-submit="SubmitFunction($event)"  name='frmPayPal1' id="paypals" style="display: none;" method="POST" >
                    <input type='hidden' name='business'  value='{{paypaldetails.paypalid}}'>
                    <input type='hidden' name='cmd' value='_xclick'>

                    <input type='hidden' name='item_name' class="item_name_s" >
                    <input type='hidden' name='item_number' class="item_names" >

 <input type='hidden' name='amount' id="amount" value='{{totals}}'>
                    <input type='hidden' name='no_shipping' value='1'>
                    <input type='hidden' name='currency_code' value='KES'>
                    <input type='hidden' name='handling' value='0'>
                    <input type='hidden' name='cancel_return' value='<?php echo base_url();?>payment/cancel'>
                    <input type='hidden' name='return' class="sucess_url">

    <input type="hidden" name="notify_url" class="sucess_url">
<input type='hidden' name='rm' value='2'>
                    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form> -->
                                 <br>
                              </div>
                              <div class="amount_pay3">
                                 &nbsp;
                              </div>
                           </div>
                        </div>
                     </div>
                     <br>
                      <br>
                      <form action="" method="post">
                        <input type='hidden' name='amount' value='{{totals}}'>
                        <input type='hidden' name='kutoka' value='{{Twowaypaymentdetails[0].pickup_point}}'>
                        <input type='hidden' name='kiti' value='{{Rseat_no}}'>
                        <input type='hidden' name='fare' value='{{Onewaypaymentdetails[0].fare}} * {{numberss}}'>
                        <input type='hidden' name='bus' value='{{Twowaypaymentdetails[0].bus_name}}'>
                        <input type='hidden' name='saa' value='{{Twowaypaymentdetails[0].board_time}}'>
                        <input type='hidden' name='kutoka' value='{{Twowaypaymentdetails[0].pickup_point}}'>
                     <div class="book_now"><button name="mailer" class="tb_nowbook" id="redirect" onclick="paypal(); window.location.href='http://fitiride.com/myaccount/index';" style="padding:5px;">Book now >></button></div>
                   </form>
                   <?php
                   /**
                   *Captures user details TODO: add their email
                   * then mails to Kevin
                   */
                   $to      = 'kevin.barasa001@gmail.com, tonywamwea@gmail.com,'.$this->session->userdata('logged_in')['username'];
                   $subject = 'New Booking with FitiRide for you from '. $_POST['kutoka'];
                  $from = 'bokings@fitiride.com';

                  // To send HTML mail, the Content-type header must be set
                  $headers  = 'MIME-Version: 1.0' . "\r\n";
                  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                  // Create email headers
                  $headers .= 'From: '.$from."\r\n".
                      'Reply-To: '.$from."\r\n" .
                      'X-Mailer: PHP/' . phpversion();

                  // Compose a simple HTML email message
$message = '<html><head><link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap-grid.min.css" type="text/css" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"></head><body style="font-family: "Open Sans", sans-serif;padding: 0;margin: 0;background: #fff;">';
$message .= '<nav class="nav" style="margin: 0;padding: 0;border-bottom: solid 1px #ccc;background: #fff;width: 100%;"><a class="item" style="position: relative;display: block;padding: 5px 10px;text-decoration: none;" href="http://www.fitiride.com/myaccount/index"><img src="http://fitiride.com/admin/assets/uploads/logo/1489587338_logo.png" alt="Fiti-Ride" title="Fiti-Ride"/></a</nav>';
$message .= '<div class="ticket-head" style="background: #f6f6f6;color: #555;padding: 5px 15px;"><h3>Fiti Rides Tickets for '.$this->session->userdata('logged_in')['username'].'</h3</div>';
$message .= '<div class="container"><div class="content" style="margin: 0px auto; border-left: solid 1px #ccc; border-right: solid 1px #ccc; background: #fff;"><div class="row"  style="border-bottom: solid 1px #ccc; padding: 5px 10px 20px 10px;margin-left: 0px;margin-right: 0px;">';
$message .= '<div class="col-md-3"><p class="sup">'. $_POST['kutoka'] . '</p><span class="sub" style="color: #959595;font-size: 12px;">06:30pm</span></br><label style="font-weight: 100;font-size: 15px;margin-top: 10px;">Trip Details</label></div>';
$message .= '<div class="col-md-3"><p class="sup" style="color: #555">Mombasa</p><span class="sub" style="color: #959595;font-size: 12px;">06:30am</span></br></div>';
$message .= '<div class="col-md-3"><p class="sup" style="color: #555">21-03-2017</p><span class="sub" style="color: #959595;font-size: 12px;">TRB1490005776</span></br></div>';
$message .= '<div class="col-md-3"><p class="sup" style="color: #555">Majestic</p><span class="sub" style="color: #959595;font-size: 12px;">Mash Poa</span></br></div></div>';
$message .= '<div class="row" style="border-bottom: solid 1px #ccc; padding: 5px 10px 20px 10px;margin-left: 0px;margin-right: 0px;">';
$message .= '<div class="col-md-3" ><p class="sup" style="color: #555">Mash Poa</p><span class="sub" style="color: #959595;font-size: 12px;">Volvo A/C Semisleeper(2+2)</span></br><label style="font-weight: 100;font-size: 15px;margin-top: 10px;">Travellers Details</label></div>';
$message .= '<div class="col-md-3" ></div><div class="col-md-3 col-md-offset-3" ><p class="sup" style="color: #555">06:15 PM-06:15 AM</p><span class="sub" style="color: #959595;font-size: 12px;">Duration -12 Hrs</span></br></div>';
$message .= '<div class="col-md-3" ><p class="sup" style="color: #555">Nairobi</p><span class="sub" style="color: #959595;font-size: 12px;">Boarding point</span></br></div></div>';
$message .= '<div class="row"  style="border-bottom: solid 1px #ccc; padding: 5px 10px 20px 10px;margin-left: 0px;margin-right: 0px;">';
$message .= '<div class="col-md-3"><p class="sup" style="color: #555">Name Here</p><span class="sub" style="color: #959595;font-size: 12px;">male Age 45</span></br><label style="font-weight: 100;font-size: 15px;margin-top: 10px;">Payment Details</label></div>';
$message .='<div class="col-md-3" ></div><div class="col-md-3 col-md-offset-3" ><p class="sup" style="color: #555">B1</p></div></div>';
$message .= '<div class="row" style="padding: 5px 10px 20px 10px;margin-left: 0px;margin-right: 0px;">';
$message .= '<div class="col-md-3"><label style="font-weight: 100;font-size: 15px;margin-top: 10px;">Trip Details</label></div>';
$message .= '<div class="col-md-3" ></div><div class="col-md-3" ></div>';
$message .= '<div class="col-md-3"><p class="sup" style="color: #555">Fare Break Up</p><span class="sub" style="color: #959595;font-size: 12px;">Base Fare Ksh: 1200.00</span></br><label style="font-weight: 100;font-size: 15px;margin-top: 10px;">TOTAL AMOUNT Ksh.1200</label></div></div></div></div>';
$message .= '<footer style="background: #f6f6f6;color: #555;height: 50px;border-top: solid 1px #eee;"><p style="text-align: center;"> All Rights Reserved &copy; - FitiRide - 2017</footer>';
$message .= '</body></html>';

 // Sending email
 if (isset($_POST['mailer'])) {
   //check if sent
   if(mail($to, $subject, $message, $headers)){
     header("Location: http://fitiride.com/myaccount/index"); /* Redirect browser */
     exit();
   }else {
     echo "There was an error processing your booking";
   }
 }
 //  $message = 'Hello '.$this->session->userdata('logged_in')['username'].' ,'. "\r\n" .
 //  'You have booked ticket with below details:' . "\r\n" .
 //  'Seat No. '.$_POST['kiti'] .' for rate of '. $_POST['fare'] .' with '. $_POST['bus'] .' bus '. "\r\n\r\n" .
 //  'You will be departuring from '. $_POST['kutoka'] . ' at '. $_POST['saa']. "\r\n\r\n" .
 // 'Total travel cost amounts to KES'. $_POST['amount'];
 ?>
					  <br>
					    </div>
 <div class="tab-content "  id="tab-5" data-id="paytm">


					   <div class="rupee_lft">&nbsp;</div>
                     <div class="tb_route_inner_txt low">
                        <div class="tb_route_inner">
                              <div class="amount_pay">
                              <div class="amount_pay1">
                                 &nbsp;
                              </div>
                              <div class="amount_pay2">
                                 <div class="amount_pay2_tb">
                                    <span class="tb_pay">Amount Payable:</span>  <span class="tb_pay1">KES.{{totals}}.00</span>
                                 </div>
                                 <br>
                                  <br>
                                 <div class="rupees"> <img src="<?php echo base_url();?>assets/images/inner2.png"><span class="get_off">  GET 20% OFF.<span class="upto">  (Upto KES.50) <br>
                                    <span class=" PayUMoney" >100% Secure Payments through Paytm</span>
                                    </span><br>
                                    </span>
                                 </div>
                                 <br>
                              </div>
                              <div class="amount_pay3">
                                 &nbsp;
                              </div>
                           </div>
                        </div>
                     </div>
                     <br>
                      <br>

					  <form method="post" action="<?php echo base_url();?>payment/paytmpost" style="display:none;" id="paytmm">

		<table border="1">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						class="item_name item_names"  >
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input class="item_name" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input class="item_name" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="{{totals}}">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="CheckOut" type="submit"	></td>
				</tr>
			</tbody>
		</table>
		* - Mandatory Fields
	</form>
                     <div class="book_now"><button class="tb_nowbook" onClick="()">Book now >></button ></div>

					  <br>

					  </div>
					    <div class="tab-content "  id="tab-6" >
					   <div class="rupee_lft">&nbsp;</div>
                     <div class="tb_route_inner_txt low ">
                        <div class="tb_route_inner">
                           <div class="amount_pay">
							   <div class="card_type">
                            select card type: &nbsp; <input type="radio"> <img src="<?php echo base_url();?>assets/images/visaa.png"></div>
							   <input type="radio"> <img src="<?php echo base_url();?>assets/images/amercan.png">
							   <br>
							<div class="nm_cd_typ"> Name on the card  </div><input class="card_nm" type="text" placeholder="Name"><br><br>
							   <div class="nm_cd_typ">   Card no. </div> <input class="card_num" type="text">

							   <input class="card_num" type="text">
							   <input class="card_num" type="text">
							   <input class="card_num" type="text">
							   <br>
							   <br>
							<div class="nm_cd_typ"> Expiry Date  </div>  <select class="year_month">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>


							    <select class="year_month_lft">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>
			<br>
							   <br>
					<div class="nm_cd_typ">CVV </div><input class="card_nm" type="text" placeholder="XXX"><br><br>				   <div class="nm_cd_typ">  &nbsp; </div>   <input type="checkbox"> save your card

                           </div>
                        </div>
                     </div>
                     <br>
                      <br>
                     <div class="book_now"><button class="tb_nowbook">Book now >></button></div>


					  <br>
					  </div>


					     <div class="tab-content "  id="tab-7" >
					   <div class="rupee_lft">&nbsp;</div>
                     <div class="tb_route_inner_txt low ">
                        <div class="tb_route_inner">
                           <div class="amount_pay">

							   <div class="nm_cd_typ">Select your Bank</div>    <select class="year_months_lft">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select><br>

							   <ul class="nbselector">
                                        <li class="icon-logosbi nb active" id="SBI_N"></li>
                                        <li class="icon-logoaxis nb" id="UTI_N"></li>
                                        <li class="icon-logoicici nb" id="ICPRF_N"></li>
                                        <li class="icon-logohdfc nb" id="HDEB_N"></li>
                                        <li class="icon-logociti nb" id="CBIBAN_N"></li>
                                        <li class="icon-logoib nb" id="INB"></li>
                                    </ul>
							   <br>



							</div>
						 </div>
					  </div>
                     <br>

					   <form method="post"
action="https://world.ccavenue.com/servlet/ccw.CCAvenueController">
 <input type="hidden" name="Merchant_Id" value="
M_demos_17
">  <input type="hidden" name="Amount" value="
1000
"> <input type="hidden" name="Currency" value="KES">
 <input type="hidden" name="Order_Id" value="
ORD_ID1234
">
<input type="hidden" name="TxnType" value="A">
<input type="hidden" name
="actionID" value="TXN">
 <input type="hidden" name="billing_cust_name" value="
John
">
 <input type="hidden" name="billing_middle_name" value="
Edgar
">
 <input type="hidden" name="billing_last_name" value="
Doe
">
  <input  type="hidden"  name="billing_cust_address"  value="
123  Green  Acres,
West Eden
">
 <input type="hidden" name="billing_cust_city" value="
Estberry
">
 <input type="hidden" name="billing_cust_state" value="
Wales
">
 <input type="hidden" name="billing_cust_zip" value="
12345
">
<input type="hidden" name="billing_cust_country" value="
UK
">
 <input type="hidden" name="billing_cust_tel_Ctry" value="
41
">
 <input type="hidden" name="billing_cust_tel_Area" value="
345
">
 <input type="hidden" name="billing_cust_tel_No" value="
345678
">
 <input type="hidden" name="billing_cust_email"
value="
johndoe@hotmail.com
">
 <input type="hidden" name="billing_cust_notes" value="
Send right away!
">   <input type="hidden" name
="delivery_cust_name" value="
John
">   <input type="hidden" name="delivery_middle_name" value="
Edgar
">   <input type="hidden" name="delivery_last_name" value="
Doe
">    <input  type="hidden"  name="
delivery_cust_address"  value="
123  Green  Acres,
West Eden
 ">   <input type="hidden" name="delivery_cust_city" value="
Estberry
">   <input type="hidden" name=" delivery_cust_state" value="
Wales
">  <input type="hidden" name=" delivery_cust_zip" value="
12345
"> <input type="hidden" name="
 delivery_cust_country" value="
UK
">   <input type="hidden" name="delivery_cust_tel_Ctry" value="
41
">  <input type="hidden" name="delivery_cust_tel_Area" value="
345
">  <input type="hidden" name="delivery_cust_tel_No" value="
345678
">  <input type="submit" value="
 Buy Now
"> </form>
			<br>







		<form action="<?php echo base_url();?>payment/checkout/234" method="POST">
<script src=""
class="stripe-button"
data-key="pk_test_XztRdK0Lc8WHu7gOc7ycunBU"
data-image="your site image"
data-name="w3code.in"
data-description="Demo Transaction ($100.00)"
data-amount="23000 " />
</script>
</form>















                     <div class="book_now"><button class="tb_nowbook">Book now >></button></div>

					  <br>

					  </div>

					  	   <div class="rupee_lft">&nbsp;</div>







                  <div id="tab-5" class="tab-content current"></div>
				  <input type="hidden" id="pament_option" value="paypal">
               </div>
            </div>
         </div>
      </div>
      </div>  <div class="loader" style="text-align:center"></div>
	  <button type="button" id="myModalpp" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalp" style="display:none;">Open Modal</button>
	  <div id="myModalp" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-body bookfloat">
		   <div class="booking_inf">
		  <div class="col-md-10">

        <p>Your booking already exists</p>

			      <div class="book_now"><a href="<?php echo base_url();?>"><button class="tb_nowbook">Book Again</button></a></div>
			  </div>
		  </div>
		  <div class="col-md-2"><img class="informt" src="<?php echo base_url();?>assets/images/infor2.png"></div>
      </div>

    </div>

  </div>
</div>
	  <!-- promo code Management script created by Anju MS on 08-12-2016-->

 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#promo_check").click(function(e){
       // var $d = $('#code').val();
       // alert($d);
          e.preventDefault();
        $.ajax({type: "POST",

                // url: "check_promo",
                 url: "<?php echo base_url();?>Payment/check_promo",
                data: { id: $("#code").val()},
                success:function(result){

                if(result>0){
                  var off = result;

                 var amt =  $('#amount').val();


                 var actual = parseInt(amt)- parseInt(off);

                 $('#amount').val(actual);
                 $('.tb_pay1').html('KES.'+actual);
                 $("#promo_status").html('You have got KES.'+off+' OFF');
               } else {
                $("#promo_status").html('Invalid promo code');
               }
        }});
      });
    });
    </script>
