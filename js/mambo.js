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




$(function(){

    $('.donate_layer').hover(function() {
        $(this).stop().animate({"top":"-25px"}, 400);
    }, function() {
        $(this).stop().animate({"top":"4px"}, 400);
        
    });
    
 });


/** function to trigger the more part*/
$(function(){
$('.bil').click(function(){
    $('.more',this).stop().slideToggle(200)});

});



/** function to spy the scrolling , Mwite ScrollNaye*/
$(function(){
    $(window).scroll(scrollNaye);


});

function scrollNaye(){
    /**
     * define it outside , reducing the time to calculate more
     * @type {number|jQuery}
     * @fadsel
     */
    var whereAmI = $(this).scrollTop();
    /**
     *
     * yeah the scrollTop gives error their , but it works fine :)
     * When ome bosy scrolls follow were it stopped
     *
     */
    if($(this).scrollTop()>=0){

       $('.kulia').stop().animate({marginTop:whereAmI},400);

    }

}

