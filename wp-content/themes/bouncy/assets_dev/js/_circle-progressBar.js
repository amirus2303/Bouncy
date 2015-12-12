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
    }

});