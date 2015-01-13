/* smooth scrolling for scroll to top */
$('.backTop').click(function(){
    $('body,html').animate({scrollTop:0},1000);
});

$(document).ready(function() {
    $('.scrollTo').click( function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        page = page.replace(' ', '');
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        return false;
    });
});
