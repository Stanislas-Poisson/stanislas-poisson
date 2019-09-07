require('./bootstrap')

// Strict Mode
;('use strict')

var hitEvent = 'tap click',
    flag = false

/* Core of the JavaScript application */
;(function($) {
    menu = $('<div id="menu"></div>')
        .appendTo('body')
        .on(hitEvent, function(event) {
            event.preventDefault()
            if (flag) {
                return false
            }
            flag = true
            setTimeout(function() {
                flag = false
            }, 100)
            $(this).toggleClass('open')
            $('nav').toggleClass('open')
        })
    $('nav').addClass('js')
    $('nav a').on(hitEvent, function(event) {
        event.preventDefault()
        if (flag) {
            return false
        }
        flag = true
        setTimeout(function() {
            flag = false
        }, 100)
        $('#menu,nav').toggleClass('open')
        $('html,body').animate(
            {
                scrollTop: $($(this).attr('href')).offset().top,
            },
            600
        )
    })
    $('p.hired a,a.hired').on(hitEvent, function(event) {
        event.preventDefault()
        if (flag) {
            return false
        }
        flag = true
        setTimeout(function() {
            flag = false
        }, 100)
        $('html,body').animate(
            {
                scrollTop: $($(this).attr('href')).offset().top,
            },
            600
        )
        $($(this).attr('href'))
            .find('input')
            .first()
            .focus()
    })
})(jQuery)
