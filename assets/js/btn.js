$(function(){
	
	$(document).on('click','#btnLogin',function(){

		var email=$("#user_email").val();
		var pass=$("#user_password").val();

		if(email=='' || pass==''){
			error("Please Fill All Field");
			return false;
		}

	});

	$(document).on('click','#btnregister',function(){

		var uname=$("#uname").val();
		var uemail=$("#uemail").val();
		var upass=$("#upass").val();
		var ucpass=$("#ucpass").val();

		if(uname=='' || uemail=='' || upass=='' || ucpass==''){
			error("Please Fill All Field");
			return false;
		}

		if(ucpass!=upass){
			error("Password doesnot match... Try aganin!!!");
			return false;
		}
		
	});

});