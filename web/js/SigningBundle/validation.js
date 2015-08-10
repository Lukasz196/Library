$(document).ready(function ()
{
	 $("form").validate({          
		showErrors: function(errorMap, errorList) {
			  // Clean up any tooltips for valid elements
			  $.each(this.validElements(), function (index, element) {
				  var $element = $(element);
				  $element.data("title", "") // Clear the title - there is no error associated anymore
					  .removeClass("error")
					  .tooltip("destroy");
			});
			  
			// Create new tooltips for invalid elements
			$.each(errorList, function (index, error) {
				  var $element = $(error.element);
				  $element.tooltip("destroy") // Destroy any pre-existing tooltip so we can repopulate with new tooltip content
					  .data("title", error.message)
					  .addClass("error")
					  .tooltip(); // Create a new tooltip based on the error messsage we just set in the title
			});
		}
	});
	
	
   $('#fos_user_registration_form_plainPassword_first').keyup(function(e){
		 var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
		 var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
		 var enoughRegex = new RegExp("(?=.{8,}).*", "g");
		 if (false == enoughRegex.test($(this).val())) {
				 $('#passstrength').html('Za kr&#243;tkie');
		 } else if (strongRegex.test($(this).val())) {
				 $('#passstrength').className = 'ok';
				 $('#passstrength').html('Silne!');
		 } else if (mediumRegex.test($(this).val())) {
				 $('#passstrength').className = 'alert';
				 $('#passstrength').html('&#346;rednie!');
		 } else {
				 $('#passstrength').className = 'error';
				 $('#passstrength').html('S&#322;abe!');
		 }
		 return true;
	});
});

//<span id="passstrength"></span>