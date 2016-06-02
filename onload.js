$(window).load(function () {//загрузка всех записок данного человека

function DIV(data1,idd){
    var div = document.createElement( 'div' );
    div.setAttribute("class", "notediv");
   // div.setAttribute("id", "divnote");
    div.id = idd;
    div.innerHTML = data1;
    var img = document.createElement('IMG');
    img.src = "del.png";
    img.id = idd;
    img.setAttribute("class","image");
    div.appendChild(img);
    mydiv.appendChild(div);
}
$.getJSON('json.php', function(data) {  
                var s  = "";  
                if($.each!=null){
                $.each(data, function(key, val) {    
                    DIV(val+"",key);
                });  
            }

            });  

});
