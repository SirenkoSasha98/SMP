$(window).load(function () {//загрузка всех записок данного человека

function DIV(data1,idd){
    var div = document.createElement( 'div' );
    div.setAttribute("class", "notediv");
    div.id = idd;
    div.innerHTML = data1;

    var img2 = document.createElement('IMG');
    img2.src = "edit.png";
    img2.id = idd;
    img2.setAttribute("class","image2");
    
    var img = document.createElement('IMG');
    img.src = "del.png";
    img.id = idd;
    img.setAttribute("class","image");
    div.appendChild(img);
    div.appendChild(img2);
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
