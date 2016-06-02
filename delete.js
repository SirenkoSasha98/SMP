$(document).ready(function(){

var idd;
$('body').on('click', '.image', function (e) {
  e.preventDefault();
  alert($(this).attr('id'));
  alert("Work");
  idd = $(this).attr('id');
  var noted = document.getElementById(idd);

$.ajax({
	 	url: "delete.php",
	 	type : "POST",
	 	data : {id: idd},
	 	beforeSend: function () {
                noted.style.display = 'none';
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

