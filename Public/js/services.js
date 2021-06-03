$(document).ready(function(){
    //hiding all services
    $('.service-details').hide();
    //listener on click
    $(".service-info").click(function(){
        //hiding all
        $('.service-details').stop().slideUp(700);
        //toggling on the click service
        $(this.nextSibling.nextSibling).stop().slideToggle(700);
    })


});