$(document).ready(function(){

var idd;
$('body').on('click', '.notediv', function (e) {
  e.preventDefault();
  alert($(this).attr('id'));
  alert("Work");
  idd = $(this).attr('id');
  var noted = document.getElementById(idd);
  var textarea = $('#updatenote');
  textarea.css("display","block");
  textarea.css("display","block");
  //idd = ($(this).attr(id));
 // var note = $(this).parentsUntil('.note').parent();
  //alert(noted);

 var update = $('.update');
 update.click(function(){
  alert(textarea.text);
      var text = textarea.val(); 
      $.ajax({
      	 	url: "update.php",
      	 	type : "POST",
      	 	data : {id: idd,note: text},
      	 	beforeSend: function () {
                      textarea.css('display','none');
                  },
      	 	success : function(data){
      	 		if(data == 1){
      	 			alert("success");
      	 	}else if(data == 0){
      	 		alert("not normal");
              }else{
                      alert("Bad");
                  }
      	 }
      	 });
});
});
});