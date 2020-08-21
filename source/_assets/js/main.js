import 'bootstrap';
import $ from 'jquery';


window.jQuery = $;
window.$ = $;


$(document).ready(function(){
    $(".welcome-text").hide().fadeIn(2000);
    $('#news-icon').css("opacity", 0);
    $(window).scroll(function(){
        if($(window).scrollTop()<300) {
            $('#news-icon').css("margin-left", 150 + $(window).scrollTop()/1.5);
            //$(document).getElementById("news-icon").style.left = 20 + $(window).scrollTop();
            $('#news-icon').css("opacity", 0+ $(window).scrollTop()/320);
        }
        else{

        }
    })
});

