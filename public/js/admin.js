$(document).ready(function() {
	$(function() {
		var Accordion = function(el, multiple) {
			this.el = el || {};
			this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		console.log(links);
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}


	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;

		$(this).next().slideToggle();
		$(this).parent().toggleClass('active');
		//$(this).parent().siblings().removeClass('active');
		if (!e.data.multiple) {
			$el.find('.submenu').not($(this).next()).slideUp().parent().removeClass('active');
		};
	}	

	var accordion = new Accordion($('#main-sidebar'), false);
});	
});

