$(document).ready(function ()
{
	
	
	
   $('#user_password').keyup(function(e) {
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