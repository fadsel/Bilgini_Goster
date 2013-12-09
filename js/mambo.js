/*
The Jquery Tutorial by mwenyewe!
 */
$(document).ready(
    index //Call them by their names :) if they dont hv parameters
);

function index() {
//    //$('span').mouseenter(mimi);
//   //$('.attribution').hide();
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

