/*Carousel type-2 4-items scripts*/
$( document ).ready( function() {
	var owl_4_tems = $("#carousel-1-4_2-container");

	owl_4_tems.owlCarousel({
		items : 4, //10 items above 1000px browser width
		pagination : false
	});

	// Custom Navigation Events
	$(".carousel-1-4_2-navigation__next").click(function(){
		owl_4_tems.trigger('owl.next');
	})
	$(".carousel-1-4_2-navigation__prev").click(function(){
		owl_4_tems.trigger('owl.prev');
	})
});


/*Carousel type-2 4-items scripts*/
$( document ).ready( function() {
	var owl_4_tems = $("#carousel-2-4-container");

	owl_4_tems.owlCarousel({
		items : 4, //10 items above 1000px browser width
		pagination : false
	});

	// Custom Navigation Events
	$(".carousel-2-4-navigation__next").click(function(){
		owl_4_tems.trigger('owl.next');
	})
	$(".carousel-2-4-navigation__prev").click(function(){
		owl_4_tems.trigger('owl.prev');
	})
});


/*Product-filter-1 scripts*/
$( function() {
	$( "#slider-range" ).slider({
		range: true,
		min: 10,
		max: 2000,
		values: [ 100, 600 ],
		slide: function( event, ui ) {
			$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		}
	});
	$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
			" - $" + $( "#slider-range" ).slider( "values", 1 ) );
} );


/*Products segment scripts (b)*/
$( document ).ready( function() {
	var prod_page_carousel = $("#product_carousel-container");

	prod_page_carousel.owlCarousel({
		items : 4, //10 items above 1000px browser width
		pagination : false
	});

	// Custom Navigation Events
	$(".product_carousel-navigation__next").click(function(){
		prod_page_carousel.trigger('owl.next');
	})
	$(".product_carousel-navigation__prev").click(function(){
		prod_page_carousel.trigger('owl.prev');
	})
});

var product_quantity_button_more = document.querySelector(".product__quantity-more");
var product_quantity_button_less = document.querySelector(".product__quantity-less");
var product_quantity_input  = document.querySelector(".product__quantity-value");
var product_quantity_value;

product_quantity_button_more.onclick = function() {
	product_quantity_value = product_quantity_input.getAttribute("value");
	product_quantity_value = product_quantity_value*1 + 1;
	product_quantity_input.setAttribute("value", product_quantity_value );
};

product_quantity_button_less.onclick = function() {
	product_quantity_value = product_quantity_input.getAttribute("value");
	if ( product_quantity_value > 1 ) {
		product_quantity_value = product_quantity_value*1 - 1;
		product_quantity_input.setAttribute("value", product_quantity_value );
	}

};
/*Products segment scripts (e)*/