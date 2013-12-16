/*
Basic Script
 */
$(document).ready(
    index (),//Call them by their names :) if they dont hv parameters
    NiRunMimiForSideBar(),
    ForOpeningAndClosingSideBar(),
    slider()

);

function index() {
//    //$('span').mouseenter(mimi);
}

function fahad(){
    $(this).hide("slow");
    $(this).delay(2000).show("slow"); // The delay fxn works great
}

/*
 Check call back
 */

function mimi (){
    $(this).slideDown(3000,fahad); // right if no parameter
   // $(this).slideDown(3000,function(){fahad(12,gogo)});//Call it inside an anonimous function if you have multiple params

}


/*
CHECK SIDEBAR , FOR SMOOTH SCROLLING

 */
function NiRunMimiForSideBar(){

    $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});


}

/*
For some reason closing  needs to come first
trust me i tried it
 */
function ForOpeningAndClosingSideBar(){

    $("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
});

    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

}


function slider(){
    $('.carousel').carousel({
        //interval: 1000
    })
}

