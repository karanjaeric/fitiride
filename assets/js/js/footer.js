
		 $('#pickDate').click(function (e) {
            $(this).next().datepicker('show');
        });
    $(".pickup_date").datepicker({
	
           minDate: 0//this option for allowing user to select from year range
        }); 
		 
	
		$(".returnsd").datepicker({
	     
         minDate: new Date($(".datetimepicker4").val())
		 
     //this option for allowing user to select from year range
        }); 
		$(".pickup_date").on('change',function(e){
		
		$("#Calenderreturn").datepicker({
	     
         minDate: new Date($(".Calenderfrom").val())
		 
     //this option for allowing user to select from year range
        }); 
		}); 
		$(".date_of_birth").datepicker({
	       changeYear: 'true',
            changeMonth: 'true'
          
        });
		$('ul.tabs li').click(function(){
			var id = $(this).data('id');
			//alert(id);
		var tab_id = $(this).attr('data-tab');

			$('ul.tabs li').removeClass('current');
			$('.tab-content').removeClass('current');

			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
			
			$('#pament_option').val(id);
	   });




