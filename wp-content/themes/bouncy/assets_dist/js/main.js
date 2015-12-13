
$( document ).ready(function() {
    new WOW().init();

    //Gestion du hover sur wokr
    $('.js-work').click(function(){
		$(this).addClass('work-hover').removeClass("work-small");// on elargi la div à 50% et on eneleve l'ancienne taille de 25% si elle existe
		$(this).find('.js-work-content').removeClass('opacity-content'); //on cache le texe en opacité

		$('.js-work').not(this).removeClass('work-hover').addClass("work-small");// on fait le contraire avec les autres boites
		$('.js-work').not(this).find('.js-work-content').addClass('opacity-content');
    });
});

$(document).ready(function(){

    var $offsetCircle = $('.circle').offset().top;// On recupere l'offset des circle pour lancer l'anime qd le scroll arrive chez eux
    $(window).scroll(function(){
        if( $(this).scrollTop() >= ($offsetCircle-1000)){ //un decallage de 1000px (je sais pas pk)
            $circleProgressBar('0.8','.circle.js-circle_80');
            $circleProgressBar('0.75','.circle.js-circle_75');
            $circleProgressBar('0.6','.circle.js-circle_60');
        }
    });

    //la fonction du plugin
    var $circleProgressBar = function(value, selector){
            $(selector).circleProgress({
                value: value,
                size: 125,
                fill: {
                    color: "#19bd9a",

                }
            }).on('circle-animation-progress', function(event, progress, stepValue) {
                $(this).find('strong').text(parseInt(stepValue*100) + ' %');
        });
    };  

});
$( document ).ready( function() {
    //Annuler le click sur les liens
    $('.filter_portfolio a').click(function(e){
        e.preventDefault();
    }); 

    //Masonry
    var $container = $('.grid').isotope({
        itemSelector: '.grid-item', 
        masonry: {
            columnWidth: '.grid-item'
        }
    });

    // filter function
    $('.filter_portfolio').on( 'click', 'li', function() {
        var filterValue = $( this ).attr('data-filter');
        $container.isotope({ filter: filterValue });
    });
});
