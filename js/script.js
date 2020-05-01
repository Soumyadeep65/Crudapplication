$(document).ready(function(){
if ($(window).width() > 575) {         
        $('.dropdown').hover(function(){ 
          $('.dropdown-toggle', this).trigger('click'); 
        });       
    }   
    else {
        
    }
});