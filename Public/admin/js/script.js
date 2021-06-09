$(document).ready(function () {

    //user profile drop down on click
    $(".nav-user").click(e=>{
        $(".user-drop-down").slideToggle(200);
        $(".alert-box").slideUp(200);
        $(".sidebar").removeClass('showSideNav');
    })
    //notifications drop down on click
    $(".nav-bell").click(e=>{
        $(".alert-box").slideToggle(200);
        $(".user-drop-down").slideUp(200);
        $(".sidebar").removeClass('showSideNav');
    })
// side bar on toggle click
    $(".nav-toggle").click(e=>{
        $(".dropdown").slideUp(200);
        $(".sidebar").toggleClass('showSideNav');
    })
    // remove drop downs on click
    $('.page-content').click(e=>{
        e.stopPropagation();
        console.log(e);
        $(".dropdown").slideUp(200);
        $(".sidebar").removeClass('showSideNav');

    })

    // set date //
    document.getElementById("date").innerHTML = new Date().getFullYear();

})
