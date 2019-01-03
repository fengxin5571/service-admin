$(function() {

	$(".interesting_liOne").mouseenter(function() {
        $(".leftWordOne").css("color","#2557A6");
        $(".leftWordTwo").css("color","#2557A6");
        $(".rightImg_one").attr("src","img/icon_a_light.png")
    }).mouseleave(function() {
        $(".leftWordOne").css("color","#999999");
        $(".leftWordTwo").css("color","#999999");
        $(".rightImg_one").attr("src","img/icon_a_normal.png")
    });
    
    $(".interesting_liTwo").mouseenter(function() {
        $(".leftWordThree").css("color","#E3401B");
        $(".leftWordFour").css("color","#E3401B");
        $(".rightImg_two").attr("src","img/icon_b_light.png")
    }).mouseleave(function() {
        $(".leftWordThree").css("color","#999999");
        $(".leftWordFour").css("color","#999999");
        $(".rightImg_two").attr("src","img/icon_b_normal.png")
    });
    
    $(".interesting_liThree").mouseenter(function() {
        $(".WordOne").css("color","#007640");
        $(".WordTwo").css("color","#007640");
        $(".rightImg_three").attr("src","img/icon_c_light.png")
    }).mouseleave(function() {
        $(".WordOne").css("color","#999999");
        $(".WordTwo").css("color","#999999");
        $(".rightImg_three").attr("src","img/icon_c_normal.png")
    });
    
    
    $(".interesting_liFour").mouseenter(function() {
        $(".wordThree").css("color","#F1AA17");
        $(".wordFour").css("color","#F1AA17");
        $(".rightImg_four").attr("src","img/icon_d_light.png")
    }).mouseleave(function() {
        $(".wordThree").css("color","#999999");
        $(".wordFour").css("color","#999999");
        $(".rightImg_four").attr("src","img/icon_d_normal.png")
    });
    
})
