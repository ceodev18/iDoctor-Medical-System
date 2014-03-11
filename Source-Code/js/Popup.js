var popupStatus = 0;

function loadPopup(){
//loads popup only if it is disabled
if(popupStatus==0){
$("#backgroundPopup").css({
"opacity": "0.7"
});
$("#backgroundPopup").fadeIn("slow");
$("#popupContact").fadeIn("slow");
popupStatus = 1;
}
}

//disabling popup with jQuery!
function disablePopup(){
//disables popup only if it is enabled
if(popupStatus==1){
$("#backgroundPopup").fadeOut("slow");
$("#popupContact").fadeOut("slow");
popupStatus = 0;
}
}

function centerPopup(){
//request data for centering
var windowWidth = document.documentElement.clientWidth;
var windowHeight = document.documentElement.clientHeight;
var popupHeight = $("#popupContact").height();
var popupWidth = $("#popupContact").width();
//centering
$("#popupContact").css({
"position": "absolute",
"top": windowHeight/2-popupHeight/2,
"left": windowWidth/2-popupWidth/2
});
//only need force for IE6

$("#backgroundPopup").css({
"height": windowHeight
});
}

$(document).ready(function(){
    $("a#openpop").click(function(){
    //centering with css
    centerPopup();  
    //load popup
    loadPopup();
    $("#popupContactClose").click(function(){
    disablePopup();
    });
    //Click out event!
    $("#backgroundPopup").click(function(){
    disablePopup();
    });
    //Press Escape event!
    $(document).keypress(function(e){
        if(e.keyCode==27 && popupStatus==1){
        disablePopup();
    }
    });
    $(".login_click").click(function(){
        disablePopup();
        $("#user_id").textContent("");
    });
});
    $(".subSearch").click(function(){
    //centering with css
    centerPopup();
    //load popup
    loadPopup();
    $("#popupContactClose").click(function(){
    disablePopup();
    });
    //Click out event!
    $("#backgroundPopup").click(function(){
    disablePopup();
    });
    //Press Escape event!
    $(document).keypress(function(e){
        if(e.keyCode==27 && popupStatus==1){
        disablePopup();
    }
    });
    $(".login_click").click(function(){
        disablePopup();
        $("#user_id").textContent("");
    });
});
    $(".buy").click(function(){
    //centering with css
    centerPopup();
    //load popup
    loadPopup();
    $("#popupContactClose").click(function(){
    disablePopup();
    });
    //Click out event!
    $("#backgroundPopup").click(function(){
    disablePopup();
    });
    //Press Escape event!
    $(document).keypress(function(e){
        if(e.keyCode==27 && popupStatus==1){
        disablePopup();
    }
    });
    $(".yes").click(function(){
        disablePopup();        
    });
});
});


