jQuery('#form').validate({
	rules:{
		name:{
			required:true,
			minlength:3,
			lettersonly:true
		},
		email:{
			required:true,
			email:true
		},
		password:{
			required:true,
			validPassword:true
		},
		cpassword:{
			required:true,
			equalTo:"#password"
		},
		'gender[]':{
			required:true
		},
		remember:{
			required:true
		},
	},
	messages:{
		name:{
			required:"Please enter your name",
			lettersonly:"The name field contain letter only"
		},
		email:{
			required:"Please enter email",
			email:"Please enter valid email",
		},
		password:{
			required:"Please enter your password",
			minlength:"Password must be 5 char long"
		},
		cpassword:{
			required:"Plase enter confirm password",
			equalTo:"Password and confirm password dose not match"
		},
	},
	submitHandler:function(form){
		form.submit();
	}
});
$.validator.addMethod("validPassword",function(value){
	return /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/.test(value);
},"Password contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters");