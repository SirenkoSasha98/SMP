$(document).ready(function(){

var idd;
$('body').on('click', '.image2', function (e) {
  e.preventDefault();
  idd = $(this).attr('id');
  var noted = document.getElementById(idd);
  var textarea = $('#updatenote');
  textarea.css("display","block");
  var mask = $("#mask");
  mask.addClass('mask').show();


var changetext = $('#texthidden');
 var update = $('#update');
 update.addClass('but').show();
 update.click(function(){
  if(changetext.val()!=''){
    changetext.text(noted.text);
    //alert(changetext.val());
    noted.innerHTML=changetext.val(); 
      $.ajax({
      	 	url: "update.php",
      	 	type : "POST",
          async: true,
      	 	data : {id: idd,note: changetext.val()},
      	 	beforeSend: function () {
                      textarea.css('display','none');
                  },

      	 	success : function(data){
      	 		/*if(data == 1){
      	 			alert("success");
      	 	}else if(data == 0){
      	 		alert("not normal");
              }else{
                      alert("Bad");
                  }*/
      	 }
      	 });
    mask.removeClass('mask').show();
    var img2 = document.createElement('IMG');
    img2.src = "edit.png";
    img2.id = idd;
    img2.setAttribute("class","image2");

    var img = document.createElement('IMG');
    img.src = "del.png";
    img.id = idd;
    img.setAttribute("class","image");
    noted.appendChild(img);
    noted.appendChild(img2);
}
});
});
});