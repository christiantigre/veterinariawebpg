//webcoder
(function($) {
    $.fn.menumaker = function(options) {
        var cssmenu = $(this),
            settings = $.extend({
                format: "dropdown",
                sticky: false
            }, options);
        return this.each(function() {
            $(this).find(".button").on('click', function() {
                $(this).toggleClass('menu-opened');
                var mainmenu = $(this).next('ul');
                if (mainmenu.hasClass('open')) {
                    mainmenu.slideToggle().removeClass('open');
                } else {
                    mainmenu.slideToggle().addClass('open');
                    if (settings.format === "dropdown") {
                        mainmenu.find('ul').show();
                    }
                }
            });
            cssmenu.find('li ul').parent().addClass('has-sub');
            multiTg = function() {
                cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                cssmenu.find('.submenu-button').on('click', function() {
                    $(this).toggleClass('submenu-opened');
                    if ($(this).siblings('ul').hasClass('open')) {
                        $(this).siblings('ul').removeClass('open').slideToggle();
                    } else {
                        $(this).siblings('ul').addClass('open').slideToggle();
                    }
                });
            };
            if (settings.format === 'multitoggle') multiTg();
            else cssmenu.addClass('dropdown');
            if (settings.sticky === true) cssmenu.css('position', 'fixed');
            resizeFix = function() {
                var mediasize = 1000;
                if ($(window).width() > mediasize) {
                    cssmenu.find('ul').show();
                }
                if ($(window).width() <= mediasize) {
                    cssmenu.find('ul').hide().removeClass('open');
                }
            };
            resizeFix();
            return $(window).on('resize', resizeFix);
        });
    };
})(jQuery);
(function($) {
    $(document).ready(function() {
        $("#cssmenu").menumaker({
            format: "multitoggle"
        });
    });
})(jQuery);
/**/

/**/
window.onload = function() {
    'use strict';

    function each(e, callback) {
        var i = 0,
            l = e.length;
        for (; i < l; i++) {
            callback.call(e[i], i, e[i]);
        }
    }
    var slideDuration = 6000, // slide duration in ms
        pauseOnHover = false, // pause auto play on hover
        slideContainer = document.getElementById('slider-container'),
        slideOuter = document.getElementById('slider-outer'),
        slides = slideOuter.getElementsByClassName('slide'),
        slidesLen = slides.length,
        slidePercent = 100 / slidesLen,
        lastSlide = slidesLen - 1,
        slideLeft = document.getElementsByClassName('left')[0],
        slideRight = document.getElementsByClassName('right')[0],
        translateLen = slidePercent * -1,
        translateBy = 0,
        threshold = 1.3,
        i = 0,
        slideInterval;
    // slides outer container width in percent
    // equal to slides number * 100
    slideOuter.style.width = slidesLen * 100 + '%';
    // slide width
    each(slides, function(i, slide) {
        slide.style.width = slidePercent + '%';
    });
    //add active class to current slide
    function activeSlide() {
        each(slides, function(index, e) {
            e.classList.remove('active');
        });
        slides[i].classList.add('active');
    }
    activeSlide();

    function translateSlider() {
        translateBy = i * translateLen;
        slideOuter.style.transform = 'translateX(' + translateBy + '%)';
        activeSlide();
        slideOuter.removeEventListener('transitionend', transitionEnd);
        slideOuter.addEventListener('transitionend', transitionEnd);
    }

    function slideForward() {
        i++;
        if (i > lastSlide) {
            i = 0;
        }
        translateSlider();
    }

    function slideBackward() {
        i--;
        if (i < 0) {
            i = lastSlide;
        }
        translateSlider();
    }

    function autoSlideInterval() {
        window.clearInterval(slideInterval);
        slideInterval = window.setInterval(slideForward, slideDuration);
    }
    autoSlideInterval();
    // next prev controls
    function setControls(control, d) {
        control.addEventListener('click', function() {
            window.clearInterval(slideInterval);
            d === -1 ? slideBackward() : slideForward();
            autoSlideInterval();
        });
    }
    setControls(slideLeft, -1);
    setControls(slideRight, 1);
    if (pauseOnHover) {
        slideContainer.addEventListener('mouseover', function() {
            window.clearInterval(slideInterval);
        });
        slideContainer.addEventListener('mouseout', function() {
            autoSlideInterval();
        });
    }

    function swipeSlide() {
        var slideLeft = slideOuter.offsetLeft,
            // translate when movedLength pass it
            slideOuterWidth = slideOuter.clientWidth,
            startPoint,
            movedLength,
            diff;

        function mouseMoveFunction(m) {
            movedLength = (m.pageX - startPoint) / slideOuterWidth * 100;
            var diff = translateBy + movedLength;
            slideOuter.style.transform = 'translate3d(' + diff + '%, 0, 0)';
        }
        slideOuter.onmousedown = function(e) {
            window.clearInterval(slideInterval);
            slideOuter.style.transition = 'all 0s ease';
            startPoint = e.pageX;
            slideOuter.addEventListener('mousemove', mouseMoveFunction);
        };
        slideOuter.onmouseup = function(e) {
            slideOuter.removeEventListener('mousemove', mouseMoveFunction);
            slideOuter.style.transition = '';
            if (movedLength >= threshold) {
                slideBackward();
            } else if (movedLength < -threshold) {
                slideForward();
            } else {
                slideOuter.style.transform = 'translate3d(' + translateBy + '%, 0, 0)';
            }
            autoSlideInterval();
        };
    }
    swipeSlide();
};
/*Menu Vertical*/
$(document).ready(function() {
    $('.menu li:has(ul)').hover(function(e) {
        e.preventDefault();
        if ($(this).hasClass('activado')) {
            $(this).removeClass('activado');
            $(this).children('ul').slideUp();
        } else {
            $('.menu li ul').slideUp();
            $('.menu li').removeClass('activado');
            $(this).addClass('activado');
            $(this).children('ul').slideDown();
        }
    });
});

/***************************NOTICIAS CON FOTOS********************************************/
/*navbar - fixed - top*/
/**********************************gallery filyter******************************/
$(document).ready(function() {
    var projects = $('.card');
    var filteredProjects = [];
    var selection = "all";
    var running = false;
    window.setTimeout(function() {
        $('.all').trigger('click');
    }, 150);
    $(window).resize(function() {
        buildGrid(filteredProjects);
    });
    $('.category-buttons a').on('click', function(e) {
        e.preventDefault();
        if (!running) {
            running = true;
            selection = $(this).data('group');
            $('.category-buttons a').removeClass('active');
            $(this).addClass('active');
            filteredProjects = [];
            for (i = 0; i < projects.length; i++) {
                var project = projects[i];
                var dataString = $(project).data('groups');
                var dataArray = dataString.split(',');
                dataArray.pop();
                if (selection === 'all') {
                    $(project).addClass('setScale').queue(function(next) {
                        filteredProjects.push(project);
                        next();
                    }).queue(function(next) {
                        $(this).removeClass('setScale');
                        next();
                    }).queue(function(next) {
                        $(this).addClass('animating show')
                        next();
                    }).delay(750).queue(function() {
                        running = false;
                        $(this).removeClass('animating').dequeue();
                    });
                } else {
                    if ($.inArray(selection, dataArray) > -1) {
                        $(project).addClass('setScale').queue(function(next) {
                            filteredProjects.push(project);
                            next();
                        }).queue(function(next) {
                            $(this).removeClass('setScale');
                            next();
                        }).queue(function(next) {
                            $(this).addClass('animating show')
                            next();
                        }).delay(750).queue(function() {
                            running = false;
                            $(this).removeClass('animating').dequeue();
                        });
                        /*$(project).css({
                          '-webkit-transition': 'all 750ms cubic-bezier(0.175, 0.885, 0.32, 1.1)',
                          'transition': 'all 750ms cubic-bezier(0.175, 0.885, 0.32, 1.1);',
                          '-webkit-transform': 'scale(' + 1 + ')',
                          '-ms-transform': 'scale(' + 1 + ')',
                          'transform': 'scale(' + 1 + ')',
                          'opacity': 1
                        });*/
                    } else {
                        $(project).queue(function(next) {
                            $(this).addClass('animating');
                            next();
                        }).queue(function(next) {
                            $(this).removeClass('show');
                            next();
                        }).delay(750).queue(function() {
                            $(this).removeClass('animating').dequeue();
                        });
                        /*$(project).css({
                          '-webkit-transition': 'all 750ms cubic-bezier(0.175, 0.885, 0.32, 1.1)',
                          'transition': 'all 750ms cubic-bezier(0.175, 0.885, 0.32, 1.1);',
                          '-webkit-transform': 'scale(' + 0 + ')',
                          '-webkit-transform': 'scale(' + 0 + ')',
                          '-ms-transform': 'scale(' + 0 + ')',
                          'transform': 'scale(' + 0 + ')',
                          'opacity': 0
                        });*/
                    }
                }
            }
            buildGrid(filteredProjects);
        }
    })

    function buildGrid(projects) {
        var left = 0;
        var top = 0;
        var totalHeight = 0;
        var largest = 0;
        var heights = [];
        for (i = 0; i < projects.length; i++) {
            $(projects[i]).css({
                height: 'auto'
            });
            heights.push($(projects[i]).height());
        }
        var maxIndex = 0;
        var maxHeight = 0;
        for (i = 0; i <= heights.length; i++) {
            if (heights[i] > maxHeight) {
                maxHeight = heights[i];
                maxIndex = i;
                $('.guide').height(maxHeight);
            }
            if (i === heights.length) {
                for (i = 0; i < projects.length; i++) {
                    $(projects[i]).css({
                        position: 'absolute',
                        left: left + '%',
                        top: top
                    });
                    left = left + ($('.guide').width() / $('#grid').width() * 100) + 2;
                    if (i === maxIndex) {
                        $(projects[i]).css({
                            height: 'auto'
                        });
                    } else {
                        $(projects[i]).css({
                            height: maxHeight
                        });
                    }
                    if ((i + 1) % 3 === 0 && projects.length > 3 && $(window).width() >= 700) {
                        top = top + $('.guide').height() + 20;
                        left = 0;
                        totalHeight = totalHeight + $('.guide').height() + 20;
                    } else if ((i + 1) % 2 === 0 && projects.length > 2 && $(window).width() < 700 && $(window).width() >= 480) {
                        top = top + $('.guide').height() + 20;
                        left = 0;
                        totalHeight = totalHeight + $('.guide').height() + 20;
                    } else if ((i + 1) % 1 === 0 && projects.length > 1 && $(window).width() < 480) {
                        top = top + $('.guide').height() + 20;
                        left = 0;
                        totalHeight = totalHeight + $('.guide').height() + 20;
                    }
                    $('#grid').height(totalHeight + $('.guide').height());
                }
            }
        }
    }
})


 $(window).load(function() {
    $('.post-module').hover(function() {
      $(this).find('.description').stop().animate({
        height: "toggle",
        opacity: "toggle"
      }, 300);
    });
  });

