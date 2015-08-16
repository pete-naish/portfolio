$(function () {
    var primaryNav = function () {

        var $navPrimary = $('.nav--primary'),
            $navPrimaryItem = $('.nav--primary__item'),
            $navPrimaryToggle = $('.nav--primary__toggle'),
            $pageOverlay = $('.page-overlay'),
            $header = $('header'),
            $mainContent = $('.main-content'),
            $body = $('body'),
            $html = $('html');

        var toggleNav = function () {
            var els = [$header, $mainContent, $navPrimary, $navPrimaryToggle, $html, $body, $pageOverlay];

            for (var i = 0; i < els.length; i++) {
                els[i].toggleClass('nav--open');
            }
        };

        var smoothScroll = function () {

            var $root = $('html,body'),
                targetHash = location.hash,
                target = $(location.hash)[0];

            var doScroll = function (target) {

                $root.stop().animate({
                    scrollTop: $(target).offset().top - 73
                }, 1000).promise().done(function () {
                    if (typeof target === 'string') {
                        history.pushState(null, null, target);
                        toggleNav();
                    }
                });

                $navPrimaryItem.removeClass('nav--primary__item--active');
            };

            if (target) {
                doScroll(target);
                $('.nav--primary__link[href="' + targetHash + '"]').parent().addClass('nav--primary__item--active');            
            }

            $navPrimary.on('click', '.nav--primary__link', function (e) {
                var $this = $(this),
                    href = $this.attr('href');

                e.preventDefault();

                doScroll(href);
                $this.parent().addClass('nav--primary__item--active');
            });

        };

        smoothScroll();

        $navPrimaryToggle.on('click', function (e) {
            e.preventDefault();
            toggleNav();
        });

        $pageOverlay.on('click', function (e) {
            e.preventDefault();
            toggleNav(); 
        })
    };

    primaryNav();

    $().prettyEmbed();
});