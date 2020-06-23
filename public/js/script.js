var $body = $('body');
$(document).ready(function () {
    //Browser Class
    browser_class();
    //Serach Show
    $('.main-search .search-btn').on('click', function () {
        $(this).parents('.main-search').find('input.search-input').show();
        $(this).parents('.main-search').addClass('open');
        $(this).parents('.main-search').find('.search-close').show();

    });
    
    //Search Hide
    $('.main-search .search-close').on('click', function () {
        $(this).parents('.main-search').find('input.search-input').hide();
        $(this).parents('.main-search').removeClass('open');
        $(this).hide();
    });
    //Ttooltip
    $('[data-toggle="tooltip"]').tooltip();

    //Content Height

    $('.main-content').css('min-height', win_height() - 90);
    //Popover
    $('[data-toggle="popover"]').popover();

    //Click Anywhere Search hide
    $(document).bind('touchstart click', function (e) {
        var $clicked = $(e.target);
        if (!$clicked.parents().hasClass("open")) {
            $(this).find('input.search-input').hide();
            $(this).removeClass('open');
            $(this).find('.search-close').hide();
        }
    });
    $('.fullscreen-btn').on('click', function () {
        toggleFullscreen();
        $(this).toggleClass('fullscreen-active');
    });
    $('[data-fancybox]').fancybox({
        toolbar: false,
        smallBtn: true,
        loop: true
    });
    //Sidebar menu
    $('.sidebar-nav li a').on('click', function () {
        $(this).parent().siblings('li').removeClass('sub-open').find('ul').slideUp();
        $(this).parent().toggleClass('sub-open').find('ul').first().slideToggle();
    });
    //Custom Scrollbar
    $(".has-custom-scrollbar").mCustomScrollbar();

    // Responsive Menu
    $('.menu-trigger').on('click', function () {
        $('body').toggleClass('menu--open');
    });

    // Chart Js

    if ($('#barChart').length) {
        var chart1 = document.getElementById("barChart").getContext('2d');
        var barChart = new Chart(chart1, {
            type: 'bar',
            data: {
                labels: ["Typo3", "HTML", "Wordpress", "Laravel", "Majento", "Angular JS"],
                datasets: [{
                        data: [12, 45, 10, 8, 10, 25],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                fontsize: 14
                            }
                        }]
                }
            }
        });
    }
    if ($('#pieChart').length) {
        var chart2 = document.getElementById("pieChart").getContext('2d');
        var pieChart = new Chart(chart2, {
            type: 'pie',
            data: {
                labels: ["Frontend Team", "Typo3 Team", "QA Team", "Management Team"],
                datasets: [{
                        label: 'Number Of people',
                        data: [15, 10, 20, 15],
                        backgroundColor: [
                            'rgba(255, 130, 0, 0.6)',
                            'rgba(0, 90, 255,0.6)',
                            'rgba(0, 68, 0,0.6)',
                            'rgba(255, 189, 0,0.6)'
                        ]
                    }]
            },
            options: {
                scales: {
                    yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                fontsize: 14
                            }
                        }]
                }
            }
        });
    }
    if ($('#lineChart').length) {
        var chart3 = document.getElementById("lineChart").getContext('2d');
        var lineChart = new Chart(chart3, {
            type: 'line',
            data: {
                labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"],
                datasets: [{
                        label: "Data",
                        borderColor: "#26a69a",
                        pointBorderColor: "#80b6f4",
                        pointBackgroundColor: "#80b6f4",
                        pointHoverBackgroundColor: "#80b6f4",
                        pointHoverBorderColor: "#80b6f4",
                        pointBorderWidth: 10,
                        pointHoverRadius: 10,
                        pointHoverBorderWidth: 1,
                        pointRadius: 3,
                        fill: false,
                        borderWidth: 4,
                        data: [100, 130, 200, 120, 240, 160, 220, 150, 210, 110, 190, 250]
                    }]
            },
            options: {
                legend: {
                    position: "bottom",
                    display: false,
                    fontsize: 14
                }

            }
        });
    }


    $(".card-option .first-opt .fa").on('click', function () {
        var $this = $(this);
        if ($this.parents('.card-option').hasClass('open')) {
            $this.parents('.card-option').animate({
                'width': '30px'
            });
            $(this).parents('.card-option').removeClass('open');
        } else {
            $this.parents('.card-option').animate({
                'width': '130px'
            });
            $(this).parents('.card-option').addClass('open');
        }
    });

    // Minimize and Maximize content
    $(".minimize-btn").on('click', function () {
        var $this = $(this);
        var port = $($this.parents('.card'));
        var card = $(port).children('.card-block').slideToggle();
        $(this).toggleClass("fa-minus").fadeIn('slow');
        $(this).toggleClass("fa-plus").fadeIn('slow');
    });
    //Delete Content
    $(".card-header-right .fa-trash").on('click', function () {
        var $this = $(this);
        $this.parents('.card').animate({
            'opacity': '0',
            '-webkit-transform': 'scale3d(.3, .3, .3)',
            'transform': 'scale3d(.3, .3, .3)'
        });

        setTimeout(function () {
            $this.parents('.card').remove();
        }, 800);
    });

});
function toggleFullscreen(elem) {
    elem = elem || document.documentElement;
    if (!document.fullscreenElement && !document.mozFullScreenElement &&
            !document.webkitFullscreenElement && !document.msFullscreenElement) {
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.msRequestFullscreen) {
            elem.msRequestFullscreen();
        } else if (elem.mozRequestFullScreen) {
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) {
            elem.webkitRequestFullscreen();
        }
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        }
    }
}


function doc_height() {
    return $(document).height();
}
function win_height() {
    return $(window).outerHeight();
}
function win_width() {
    return $(window).width();
}
function header_height() {
    return $('header').outerHeight();
}
$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 100) {
        $('.go-top').fadeIn(500);
    } else {
        $('.go-top').fadeOut(500);
    }
});
/*** Add Browser + Os Class ***/
function browser_class() {
    var os = ['iphone', 'ipad', 'windows', 'mac', 'linux'];
    var platform = navigator.userAgent.toLowerCase().match(new RegExp(os.join('|')));
    var browsers = ['firefox', 'safari', 'chrome', 'msie'];
    var browser = navigator.userAgent.toLowerCase().match(new RegExp(browsers.join('|')));
    if (platform[0]) {
        $('body').addClass(platform[0] + ' ' + browser);
    }
}
//# sourceMappingURL=script.js.map
