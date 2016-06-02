$(document).ready(function(){
var clickButtonForm = $("#clickButtonForm");
clickButtonForm.click(function(){
	 var inputNickName = $("#nickname");
	 var inputLogin = $("#login");
	 var password11 = $("#password1");
	 var password22 = $("#password2");
	 if(inputNickName.val() == "" || inputLogin.val() == "" || password11.val() == "" ||  password22.val() ==""){ 
	 	$("#error").text("Заполните все поля").removeClass("success").addClass("error").show().delay(3000).fadeOut(300);}
 	else if(password11.val() !=  password22.val())	{
     	$("#error").text("Пароли не совпадают. Попробуйте еще раз").removeClass("success").addClass("error").show().delay(3000).fadeOut(300);
	 }
	 else{
	 $.ajax({
	 	url: "register.php",
	 	type : "POST",
	 	data : { nickName: inputNickName.val(),Login: inputLogin.val(),Password1: password11.val()},
	 	success : function(data){
	 		if(data == 1){
	 		//alert("norm");
            var url = "notes.php";
            $(location).attr('href',url);
	 	}else if(data == 0){
             $("#error").text("Такой login уже существует. Выберите другой").removeClass("success").addClass("error").show().delay(3000).fadeOut(300);
	 	}else{
                alert("Bad");
            }
	 }
	 });
	}
	});
	var clickButtonLoginForm = $("#clickButtonLoginForm");
	clickButtonLoginForm.click(function(){
            var name_login = $("#name_login").val();
            var pass_login = $("#password_login").val();

            if(name_login == "" || pass_login == ""){

            	$("#error").text("Заполните все поля").removeClass("success").addClass("error").show().delay(3000).fadeOut(300);
            }else{
            	$.ajax({

            		url: "action_login.php",
            		type: "POST",
            		data : {login : name_login, pass: pass_login},
            		success:function(data){
            			if(data){
            				if(data == 0) {
            					$("#error").text("Такой пары логин/пароль не существует. Возможно вы еще не зарегистрированы").removeClass("success").addClass("error").show();
            				}
            				else if(data == 1) {
            					alert("All is good");
            					var url = "notes.php";
                                          $(location).attr('href',url);
            				}else{
                                          alert(data);
                                    }
                            
            			}else{
 							alert("Данные не получены");
            			}

            		}
            	})
            }

});
});

