import 'bootstrap';
import $ from 'jquery';


window.jQuery = $;
window.$ = $;


$(document).ready(function(){


    if(window.innerWidth<992){
        //window.alert(window.innerWidth);
        $(".welcome-text").hide().fadeIn(2000);
    }

    document.getElementById('repa').onmouseover = function() {
        /*alert('howdy') ;*/
        document.getElementById('onGalleryNav').style.display="inline-block";


    };
    document.getElementById('repa').onmouseleave = function() {

        document.getElementById('onGalleryNav').style.display="none";

    };


    $('#_news-icon').css("opacity", 0);
    $(window).scroll(function(){
        if($(window).scrollTop()<300) {
            $('#_news-icon').css("margin-left", 150 + $(window).scrollTop()/1.5);
            //$(document).getElementById("_news-icon").style.left = 20 + $(window).scrollTop();
            $('#_news-icon').css("opacity", 0+ $(window).scrollTop()/320);
        }
        else{

        }
    })
});




/*document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'hu',
        initialView: 'dayGridMonth'
    });
    calendar.render();

});*/




import { Calendar } from '@fullcalendar/core';
import interactionPlugin from '@fullcalendar/interaction';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import listPlugin from '@fullcalendar/list';
import hu from '@fullcalendar/core/locales/hu';
import googleCalendarPlugin from '@fullcalendar/google-calendar';
import ScrollReveal from "scrollreveal";

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new Calendar(calendarEl, {
        locale:'hu',
        plugins: [ interactionPlugin, dayGridPlugin, timeGridPlugin, listPlugin, googleCalendarPlugin ],
        headerToolbar: {
            left: 'title',
            center: '',
            right: 'timeGridDay,dayGridMonth,today',
        },
        footerToolbar: {
            center: 'prev,next'
        },
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        googleCalendarApiKey: 'AIzaSyCH1L-HgnK9YtsxEqeThlhmhLF5SVTXA-Q',
        events: {
            googleCalendarId: 'c_49i2mimko7l9b4u683l9s4ukok@group.calendar.google.com',
        }
    });

    calendar.render();
});




$(function(){

    window.sr = ScrollReveal();

    if ($(window).width() < 768) {

        if ($('.timeline-content').hasClass('js--fadeInLeft')) {
            $('.timeline-content').removeClass('js--fadeInLeft').addClass('js--fadeInRight');
        }

        sr.reveal('.js--fadeInRight', {
            origin: 'right',
            distance: '300px',
            easing: 'ease-in-out',
            duration: 800,
        });

    } else {

        sr.reveal('.js--fadeInLeft', {
            origin: 'left',
            distance: '300px',
            easing: 'ease-in-out',
            duration: 800,
        });

        sr.reveal('.js--fadeInRight', {
            origin: 'right',
            distance: '300px',
            easing: 'ease-in-out',
            duration: 800,
        });

    }

    sr.reveal('.js--fadeInLeft', {
        origin: 'left',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
    });

    sr.reveal('.js--fadeInRight', {
        origin: 'right',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
    });


});

window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
        document.getElementById("nav1").style.position="fixed";
    } else {
        document.getElementById("nav1").style.position="absolute";
    }
}


function showNavbar(){

}

