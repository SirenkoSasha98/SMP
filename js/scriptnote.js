$(document).ready(function(){
	var dat = -1;
	var clickButtonNote = $(".clickButtonNote"); 
	var i = -1;
	clickButtonNote.click(function (){

   	var inputNote = $("#text").val();

	if(inputNote != ""){
		$.ajax({
		url: "notetodb.php",
	 	type : "POST",
	 	async: true,
	 	data : {Note: inputNote},
	 	success : function(data){
	 		dat = data;
	 		/*if(data == 1){
	 			alert("Ok");
	 		}else if(data == 0){
	 			alert("Bad");
	 		}else{
	 			alert(data);
	 		}*/
		}
	    });
	var div = document.createElement( 'div' );
    div.innerHTML = document.getElementById("text").value;
    div.setAttribute("class", "notediv");

    var img = document.createElement('IMG');
    img.src = "del.png";
    img.id = dat;
    var img2 = document.createElement('IMG');
    img2.src = "edit.png";
    img2.id = dat;
    img2.setAttribute("class","image2");

    img.setAttribute("class","image");
    //div2.appendChild(img);
    div.appendChild(img);
    div.appendChild(img2)
    div.id = dat;

    mydiv.appendChild( div );

if(document.getElementById("text").value!=""){document.getElementById("text").value = "";}
	 	if(dat!=-1){
		//alert(dat);
	}

	}

});
var logout = $(".logout");
logout.click(function() {
	$.get("logout.php");
    window.location.replace("registretion.php");
});
});