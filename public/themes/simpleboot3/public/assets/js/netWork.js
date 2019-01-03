//个人中心二级菜单
$(function() {
	 $(".head_liOne").mouseenter(function() {
        $(".twoMenuOne").stop().slideDown();
    }).mouseleave(function() {
        $(".twoMenuOne").stop().slideUp();
    });
    
    $(".head_liTwo").mouseenter(function() {
        $(".twoMenuTwo").stop().slideDown();
    }).mouseleave(function() {
        $(".twoMenuTwo").stop().slideUp();
    });
    
    $(".head_liThree").mouseenter(function() {
        $(".twoMenuThree").stop().slideDown();
    }).mouseleave(function() {
        $(".twoMenuThree").stop().slideUp();
    });
    
    $(".head_liFour").mouseenter(function() {
        $(".twoMenuFour").stop().slideDown();
    }).mouseleave(function() {
        $(".twoMenuFour").stop().slideUp();
    });
    
    $(".head_liFive").mouseenter(function() {
        $(".twoMenuFive").stop().slideDown();
    }).mouseleave(function() {
        $(".twoMenuFive").stop().slideUp();
    });
    
    $(".head_liSix").mouseenter(function() {
        $(".twoMenuSix").stop().slideDown();
    }).mouseleave(function() {
        $(".twoMenuSix").stop().slideUp();
    });
    
    
    
    //调节音量
    $(".videos").volume = 0.2;
})
   