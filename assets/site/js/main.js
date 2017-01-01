$(document).ready(function () {
    "use strict";

    $("[data-countdown]").each(function() {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime('<div class="box-time-date day"><div class="box-time-date-inner"><span class="time-num">%-D</span>Days</div></div> <div class="box-time-date hour"><div class="box-time-date-inner"><span class="time-num">%-H</span> Hours</div></div> <div class="box-time-date minutes"><div class="box-time-date-inner"><span class="time-num">%-M</span>Mins</div></div> <div class="box-time-date second"> <div><div class="box-time-date-inner"><span class="time-num">%-S</span>Secs</div></div>'));
        });
    });

});

/*Menu Toggle
================================*/
$(document).ready(function () {

    $(".menu-toggle").click(function () {
        $(".site-menu").toggleClass("menu-open");
    });
});

/*Select Menu
=========================*/
$('#menu-select, #menu-select2').selectmenu({
  change: function( event, ui ) {
      $(this).change();
  }
});


$(document).ready(function () {

    var first_limit = $('input.first_limit').data('value');
    var last_limit = $('input.last_limit').data('value');

    $('#price').slider({
        orientation: "horizontal",
        range: true,
        values: [ first_limit, last_limit ],
        min: first_limit,
        max: last_limit,
        slide : function(event ,ui){
            $(this).prev().find('.first_limit').val('$' + ui.values[0]);
            $(this).prev().find('.last_limit').val('$' + ui.values[1]);
        },
        stop: function( event, ui ) {
            $(this).prev().find('.first_limit').change();
        }
    });
});



/*Owl Carousel
=============================*/
$(document).ready(function () {
    "use strict";
    $(".widgets_carousel").owlCarousel({
        items : 1,
        itemsDesktopSmall : [979, 1],
        itemsDesktop : [1199, 1],
        navigation : true,
        pagination : false,
        autoPlay : true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
    });

    $(".widgets_carousel4").owlCarousel({
        items : 4,
        navigation : true,
        pagination : false,
        autoPlay : true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
    });
    $(".widgets_carousel5").owlCarousel({
        items : 5,
        navigation : true,
        pagination : false,
        autoPlay : true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
    });
});



/* Show Product Zoom
==============================*/
$(document).ready(function () {
    "use strict";
	if($('.gallery-thumb').length>0){
		$('.gallery-thumb').each(function(){
			$(this).jCarouselLite({
				btnNext: ".gallery-control .next",
				btnPrev: ".gallery-control .prev",
				speed: 800,
				visible:4,
				vertical: true
			});
		});
	}
	$(".gallery-thumb a").on('click',function(event) {
		event.preventDefault();
		$(this).parent().siblings().removeClass('active');
		$(this).parent().addClass('active');
		$(this).parents('.wrap-gallery-thumb').prev().find("img").attr("src", $(this).children().attr("src"));
	});

});




/*Tab Panel
===============================*/

$(document).ready(function () {

    "use strict";

    $(".tab").each(function () {

        $(".tab-panel").not(":first").hide();

        $("li", this).removeClass("active");

        $("li:first-child", this).addClass("active");

        $(".tab-panel:first-child").show();

        $("li", this).click(function (t) {

            var i = $("a", this).attr("href");

            $(this).siblings().removeClass("active");

            $(this).addClass("active");

            $(i).siblings().hide();

            $(i).fadeIn(400);

            t.preventDefault();
        });
    });
});


/*Add Review Scroll
==============================*/

$(document).ready(function () {

    "use strict";

    $('a[href="#reviews"].add-review').click(function (e) {

        e.preventDefault();

        $('.tab a[href="#reviews"]').trigger('click');

        $('body, html').animate({
            scrollTop: $("#reviews").offset().top
        }, 1000);

    });

});


/* Product Number Counter
====================================*/

$(document).ready(function () {

    'use strict';

    $('.number-up').click(function () {
        var numUp = $(this).closest('.cat-number').find('input[type="text"]');
        var $value = parseFloat(numUp.prop('value'));
        if ($value < parseFloat(numUp.prop('max'))) {
            numUp.prop('value', ($value) + 1);
        }
        return false;
    });

    $('.number-down').click(function () {
        var numDown = $(this).closest('.cat-number').find('input[type="text"]');
        var $value = parseFloat(numDown.prop('value'));
        if ($value > 1) {
            numDown.prop('value', $value - 1);
        }
        return false;
    });

});


$(document).ready(function () {

    'use strict';
    $(".shop-cart").hover(function (e) {
        e.preventDefault();
        $(".shop-cart > .cart-cont").slideToggle('1000');

    });

    $(document).on('click' ,".product-remove",function (e) {

        e.preventDefault();

        $(this).parent().slideUp(500, function () {

            $(this).remove();

        });

    });

});












$(document).ready(function () {

    "use strict";

    $(".toggle-products > a").click(function (e){

        e.preventDefault();

        var $this = $(this),
            container = $($this.parent().data('container'));

        $this.addClass('active').siblings().removeClass('active');

        container.removeClass('grid_view list_view').addClass($this.data('layout'));

    });


});
