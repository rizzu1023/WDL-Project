
$(function()
{



	$('#sname').on('keypress',function(e){
		if(/[^a-zA-Z ]/.test(e.key)){
			alert("Invalid Name. Only alphabets and spaes allowed");
			this.value="";
			$(this).focus();
			return false;

		}
	});

	$('#semail').on('blur',function(e){
		if(/^[a-zA-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i.test(this.value)){
			alert("Invalid mail address");
			this.value=""
			$(this).focus();
		}
	});
});



