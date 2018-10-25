

$(function(){

	$('#semail').on('blur',function(){
		if(/ /.test(this.value)){
			alert("Invalid Email");
			this.value="";
			$(this).focus();
		}
	});
});



